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

    public $min_value = 0;
    public $max_value = 1000;

    public bool $loadData = false;

    public function init()
    {
        $this->loadData = true;
    }

    public function store($product_id,$product_name,$price){
        Cart::instance('cart')->add($product_id,$product_name,1,$price)->associate('\App\Models\Product');
        session()->flash('success_massage','Item add in cart');
        // $this->emitTo('cart-icon-component','refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function changePageSize($size){
        $this->pageSize = $size;
    }

    public function changeOrderBy($order){
        $this->orderBy = $order;
    }

    public function addToWishList($product_id,$product_name,$product_price){
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wish-list-icon-component','refreshComponent');
    }


    public function removeFromWishList($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wish-list-icon-component','refreshComponent');
                return;
            }
        }

    }

    public function render()
    {
        if($this->orderBy == 'Price: Low to High'){

            $products = Product::query()->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','asc')->paginate($this->pageSize);

        }else if($this->orderBy == 'Price: High to Low'){
            $products = Product::query()->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('regular_price','desc')->paginate($this->pageSize);

        }else if($this->orderBy == 'Sort By Newness'){
            $products = Product::query()->whereBetween('regular_price',[$this->min_value,$this->max_value])->orderBy('created_at','desc')->paginate($this->pageSize);
        }else{
            $products = Product::query()->whereBetween('regular_price',[$this->min_value,$this->max_value])->paginate($this->pageSize);
        }
        $this->emitTo('laoding-component','refreshComponent');
        // $products = Product::query()->paginate($this->pageSize);
        $categories = Category::query()->orderBy('name','asc')->where('status',1)->get();

        return view('livewire.shop-component',
        ['products'=> $products, 'category'=>$categories])
        ->layout('layouts.base',['title'=>__('Shop')]);
    }
}
