<?php

namespace App\Livewire\User\Endereco;

use Livewire\Component;
use App\Models\Address;
use Illuminate\Http\Request;

class UserEnderecoCreate extends Component
{
    public $title   = 'Create User Address';
    public $street  = ' ';
    public $city    = ' ';
    public $state   = ' ';
    public $country = ' ';
    public $zipcode = ' ';

    protected $rules = [
        'zipcode' => 'required|min:8',
    ];

    // public function update($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function store(Request $request){

        // $this->validate();
        
        dd($this->street);

        Address::create([
            'street'  => $this->street,
            'city'    => $this->city,
            'state'   => $this->state,
            'country' => $this->country,
            'zipcode' => $this->zipcode
        ]);

        $this->street = $this->city = $this->state = $this->country = $this->zipcode = null;

        session()->flash('message','Endereço criado com sucesso');

    }
    
    public function render()
    {
        return view('livewire.user.endereco.user-endereco-create');
    }
}
