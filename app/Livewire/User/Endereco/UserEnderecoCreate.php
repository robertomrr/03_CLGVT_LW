<?php

namespace App\Livewire\User\Endereco;

use Livewire\Component;

class UserEnderecoCreate extends Component
{
    public $title = 'Create User Address';

    public function render()
    {
        return view('livewire.user.endereco.user-endereco-create');
    }
}
