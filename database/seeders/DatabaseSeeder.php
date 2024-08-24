<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::factory(6)->create();
        // Product::factory(6)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Product::query()->create([
            'name' =>'Product1',
            'slug' => 'Product1',
            'status' =>0,
            'short_description' =>'asdjwlkj asdjflkajsdlk ajdkeljrkjaglkj sjgrl;gjrjglj lj;fg',
            'description' =>'asdjwlkj asdjflkajsdlk ajdkeljrkjaglkj sjgrl;gjrjglj lj;fg dwdwq sdwdasdwde rfwrga',
            'regular_price' => 100,
            'sale_price' =>200,
            'SKU' => 125632,
            'stock_status' => 'instock',
            'featured' => 0,
            'images' =>'img',
            'category_id' =>1,
        ]);


        Product::query()->create([
            'name' =>'Product2',
            'slug' => 'Product2',
            'status' =>0,
            'short_description' =>'asdjwlkj asdjflkajsdlk ajdkeljrkjaglkj sjgrl;gjrjglj lj;fg',
            'description' =>'asdjwlkj asdjflkajsdlk ajdkeljrkjaglkj sjgrl;gjrjglj lj;fg dwdwq sdwdasdwde rfwrga',
            'regular_price' => 100,
            'sale_price' =>200,
            'SKU' => 125632,
            'stock_status' => 'instock',
            'featured' => 0,
            'images' =>'img',
            'category_id' =>1,
        ]);

        Product::query()->create([
            'name' =>'Product3',
            'slug' => 'Product3',
            'status' =>0,
            'short_description' =>'asdjwlkj asdjflkajsdlk ajdkeljrkjaglkj sjgrl;gjrjglj lj;fg',
            'description' =>'asdjwlkj asdjflkajsdlk ajdkeljrkjaglkj sjgrl;gjrjglj lj;fg dwdwq sdwdasdwde rfwrga',
            'regular_price' => 100,
            'sale_price' =>200,
            'SKU' => 125632,
            'stock_status' => 'instock',
            'featured' => 0,
            'images' =>'img',
            'category_id' =>1,
        ]);
    }
}
