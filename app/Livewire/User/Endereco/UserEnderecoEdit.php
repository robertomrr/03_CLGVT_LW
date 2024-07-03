<?php

namespace App\Livewire\User\Endereco;

use Livewire\Component;
use App\Models\Address;
use Illuminate\Http\Request;
class UserEnderecoEdit extends Component
{
    public $title = 'Edit User Address';
    public $Endid;
    public $address;
    public $street;
    public $city;
    public $state;
    public $country;
    public $zipcode;

    protected $rules = [
        'zipcode' => 'required|min:8',
    ];

    // public function update($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function mount( $id ){
       
        $address = Address::find( $id );
        if ($address){
            $this->Endid   = $address->id;
            $this->street  = $address->street;
            $this->city    = $address->city;
            $this->state   = $address->state;
            $this->country = $address->country;
            $this->zipcode = $address->zipcode;   
        }
    } 
    
    public function update(){
        
        $address = Address::find( $this->Endid );
        //dd($address);
        //dd('id = '. $this->id );
        if ($address){
            dd($this->street);
            $address->street  = $this->street;
            $address->city    = $this->city;
            $address->state   = $this->state;
            $address->country = $this->country;
            $address->zipcode = $this->zipcode;
            $address->save();

            session()->flash('message','Endereço atualizado com sucesso.');
        } else {
            session()->flash('error','Endereço não atualizado.');
        }
        
    }

    public function render()
    {
        return view('livewire.user.endereco.user-endereco-edit');
    }
}
