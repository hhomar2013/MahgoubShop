<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\tages;
use Livewire\Component;

class SearchComponent extends Component
{
    public $query;
    public $search;


    public function mount(){
        // $this->query = '';
        // $this->search = [];
    }

    // public function updateQuery(){
    //     $this->search =
    // }

    public function render()
    {
        $this->search = Product::query()->where('name','like','%'. $this->query .'%')->get();
        return view('livewire.search-component',['search'=>$this->search]);
    }
}
