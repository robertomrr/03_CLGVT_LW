<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    
    public function render()
    {
        return view('livewire.users-table',
        [

            'users' => User::paginate( $this->perPage ) 

        ]);
    }
}
