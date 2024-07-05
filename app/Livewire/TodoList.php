<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;

class TodoList extends Component
{
    use WithPagination;
    
    #[Rule('required|min:3|max:50')]
    public $name;
    
    public $search;

    public $editingTodoId;
    public $editingTodoName;

    public function create(){
        //dd('Test the access');
        //validate
                //$this->validate();
                $validated = $this->validateOnly('name');
        // create the todo
                Todo::create($validated);
        // clear the input
                $this->reset('name');
        // send flash message
                session()->flash('success','Created.'); 
        // Reset Page
                $this->resetPage();       
    }

    public function delete($todoId){

        try{
                Todo::findOrFail($todoId)->delete();
        }catch(Exception $e) {
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
