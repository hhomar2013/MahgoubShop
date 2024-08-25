<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{

    public $slug;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        $categories = Category::query()->get();
        $product = Product::query()->where('slug',$this->slug)->first();
        $rProducts = Product::query()->where('category_id',$product->category_id)->inRandomOrder()->limit(4)->get();
        $lProducts = Product::Latest()->take(4)->get();
        return view('livewire.details-component',
        ['products'=>$product ,
         'categories'=>$categories,
         'rProducts' => $rProducts,
         'lProducts' => $lProducts,
        ]);
    }
}
