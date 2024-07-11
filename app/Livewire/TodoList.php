<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\CustomLog;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

$userDetails = session('user');

class TodoList extends Component
{
    use WithPagination;
    
    #[Rule('required|min:3|max:50')]
    public $name;
    
    public $search;

    public $editingTodoId;
    public $editingTodoName;

    public $custom_log;

    public $user;
    public $userId;

public function __construct(){
        $this->custom_log = new CustomLog();
    }

    public function create(){
        
        $user = Auth::user();
        $userId = $user->id;

        Log::channel('stack')->info('Todo - Create - Registro - acessado.');

        try{
        //Livewire feature validateOnly
                $validated = $this->validateOnly('name');
        // create the todo
                Todo::create($validated);
        // Usando Query Builder
                $string = json_encode($validated);
                $id = DB::table('todos')->insertGetId([
                        'name' => $string,
                ]);
        // clear the input
                $this->reset('name');
        // send flash message
                session()->flash('success','Created.'); 
        // Reset Page
                $this->resetPage();
                
                //---------------------------------------
                //Registrando no Log
                //---------------------------------------

                $this->custom_log->create([
                        'user_id' => $userId,
                        'todo_id' => $id,
                        'content' => 'Resgistrado',
                        'operation' => 'create'
                ]);

        }catch(\Exception $e){

                $this->custom_log->create([
                        'user_id' => $userId,
                        'todo_id' => 1,
                        'content' => $e->getMessage(),
                        'operation' => 'create'
                ]);

                $notification = array(
                'title' => trans('validation.generic.Warning'),
                'message' => trans('validaton.generic.failed_job'),
                'alert-type' => 'warning' 
            );
            return back()->with($notification);
        }
   
                
                
    }

    public function delete($todoId){
        
        $userDetails = session('user');
        $user = 'Roberto';
        $id = '1';

        Log::channel('slack')->info('O usuário ' . $user .' Id '. $id .' deletou o todo id '.$todoId);

        try{
                Todo::findOrFail($todoId)->delete();
        }catch(\Exception $e) {
                session()->flash('error','Failed to delete todo!');
                return;
        }

    }

    public function toggle($todoId){
        $todo = Todo::find($todoId);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    public function edit($todoId){
        $this->editingTodoId = $todoId;
        $this->editingTodoName = Todo::find($todoId)->name;
    }

    public function cancelEdit(){
        $this->reset('editingTodoId','editingTodoName');
    }

    public function update(){
        $this->validateOnly('editingTodoName');
        Todo::find($this->editingTodoId)->update(                
                [
                        'name' => $this->editingTodoName
                ]
                );
        $this->cancelEdit();
    }

    public function render()
    {
        // return view('livewire.todo-list',['todos' => Todo::latest()->get()] );
        return view('livewire.todo-list',['todos' => Todo::latest()->where('name','like',"%{$this->search }%")->paginate(5)] );

    }
}
