<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $pageSize=12;

    public function store($product_id,$product_name,$price){
        Cart::add($product_id,$product_name,1,$price)->associate('\App\Models\Product');
        session()->flash('success_massage','Item add in cart');
        return redirect()->route('shop.cart');
    }

    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function render()
    {
        $products = Product::query()->paginate(10);
        return view('livewire.shop-component',['products'=>$products])->layout('layouts.base',['title'=>__('Shop')]);
    }
}
