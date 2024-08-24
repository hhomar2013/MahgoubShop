<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = $this->faker->name();
        $slug = Str::slug($name ,'-');
        return [
            'name' =>$name,
            'slug' => $slug,
            'status' => false,
            'short_description'=> $this->faker->words(300),
            'description' => $this->faker->words(500),
            'regular_price' => $this->faker->numberBetween(10,500),
            'sale_price' => $this->faker->numberBetween(10,500),
            'SKU' => 'PRD' . $this->faker->unique()->numberBetween(10,500),
            'stock_status' => 'instock',
            'featured' => false,
            'images' =>'img',
            'category_id' =>$this->faker->numberBetween(1,5),
        ];
    }
}
