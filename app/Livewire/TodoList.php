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
    }

    public function render()
    {
        // return view('livewire.todo-list',['todos' => Todo::latest()->get()] );
        return view('livewire.todo-list',['todos' => Todo::latest()->paginate(5)] );

    }
}
