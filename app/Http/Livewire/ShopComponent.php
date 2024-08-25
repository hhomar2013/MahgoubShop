<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public function render()
    {
        $products = Product::query()->paginate(10);
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base',['title'=>__('Shop')]);
    }
}
