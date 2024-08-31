<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LaodingComponent extends Component
{
    public $target;
    protected $listeners = ['refreshComponent'=>'$refresh'];
    // public function mount($target){
    //     $this->target =$target;
    // }

    public function render()
    {
        return view('livewire.laoding-component');
    }
}
