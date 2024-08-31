<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public $load = false;

    public function init()
    {
        $this->load = true;
        $this->emitTo('lading-component','refreshComponent');
    }
    public function render()
    {
        return view('livewire.home-component')->layout('layouts.base',['title'=>__('Home')]);
    }
}
