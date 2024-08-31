<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $pageSize=12;
    public $orderBy= "Defualt Sorting";

    public function store($product_id,$product_name,$price){
        Cart::add($product_id,$product_name,1,$price)->associate('\App\Models\Product');
        session()->flash('success_massage','Item add in cart');
        return redirect()->route('shop.cart');
    }

    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function changeOrderBy($order){
        $this->orderBy = $order;
    }

    public function render()
    {
        if($this->orderBy == 'Price: Low to High'){
            $products = Product::query()->orderBy('regular_price','ASC')->paginate($this->pageSize);
        }else if($this->orderBy == 'Price: High to Low'){
            $products = Product::query()->orderBy('regular_price','DESC')->paginate($this->pageSize);
        }else if($this->orderBy == 'Sort By Newness'){
            $products = Product::query()->orderBy('created_at','DESC')->paginate($this->pageSize);
        }else{
            $products = Product::query()->paginate($this->pageSize);
        }

        $products = Product::query()->paginate(10);
        $categories = Category::query()->get();
        return view('livewire.shop-component',['products'=>$products , 'category'=>$categories])->layout('layouts.base',['title'=>__('Shop')]);
    }
}
