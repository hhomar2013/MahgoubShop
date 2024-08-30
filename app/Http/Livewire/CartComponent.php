<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{

    public function increaseQty($rowId){
        $product  = Cart::get($rowId);
        $qty = $product->qty +1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function decreaseQty($rowId){
        $product  = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
        $this->emitTo('cart-icon-component','refreshComponent');
    }


    public function deleteItem($rowId){
        Cart::remove($rowId);
        session()->flash('success_massage','Item Has been remove!');
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function clearAll(){
        Cart::destroy();
        session()->flash('success_massage','Item Has been remove!');
        $this->emitTo('cart-icon-component','refreshComponent');
    }

    public function render()
    {
        return view('livewire.cart-component')->layout('layouts.base',['title'=>'Cart']);
    }
}
