<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class CounterController extends Component
{
//______________________________________________________
    public function mount(){
        //dd('stop');
        
    }

//______________________________________________________
    public $todo = "Texto Inicial";    

    
    public $todos = [ 
        'Take out trash',
        'do dishes',
    ];
    public function add(){
        //dd('hey there');
        $this->todos[] = $this->todo;
    }
//_____________________________________________________
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
//______________________________________________________ 
    public function render()
    {
        return view('livewire.counterView');
    }

}