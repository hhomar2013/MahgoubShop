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

    public bool $loadData = false;

    public function init()
    {
        $this->loadData = true;
    }

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

            $products = Product::query()->orderBy('regular_price','asc')->paginate($this->pageSize);

        }else if($this->orderBy == 'Price: High to Low'){
            $products = Product::query()->orderBy('regular_price','desc')->paginate($this->pageSize);

        }else if($this->orderBy == 'Sort By Newness'){
            $products = Product::query()->orderBy('created_at','desc')->paginate($this->pageSize);
        }else{
            $products = Product::query()->paginate($this->pageSize);
        }
        $this->emitTo('laoding-component','refreshComponent');
        // $products = Product::query()->paginate($this->pageSize);
        $categories = Category::query()->orderBy('name','asc')->where('status',1)->get();

        return view('livewire.shop-component',
        ['products'=> $products, 'category'=>$categories])
        ->layout('layouts.base',['title'=>__('Shop')]);
    }
}
