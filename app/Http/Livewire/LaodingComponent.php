<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LaodingComponent extends Component
{
    public $target;
    public function render()
    {
        return view('livewire.laoding-component',[
            'target'=>$this->target
        ]);
    }
}
