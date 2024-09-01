<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{
    public function increaseQty($rowId){
        $product  = Cart::instance('cart')->get($rowId);
        $qty = $product->qty +1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function decreaseQty($rowId){
        $product  = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1;
        Cart::instance('cart')->update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }


    public function deleteItem($rowId){
        Cart::instance('cart')->remove($rowId);
        session()->flash('success_massage','Item Has been remove!');
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function clearAll(){
        Cart::instance('cart')->destroy();
        session()->flash('success_massage','Item Has been remove!');
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base',['title'=>'Cart']);
    }
}
