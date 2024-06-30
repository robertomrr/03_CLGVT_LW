<?php

namespace App\Livewire;

use Livewire\Component;

class CallViewExemple extends Component
{

    public $projects = ['Project 1', 'Project 2', 'Project 3'];

    public $tasks = ['Task 1', 'Task 2', 'Task 3'];

    public function render()
    {
        return view('livewire.callviewexemple');
    }
}
