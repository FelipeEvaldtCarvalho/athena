<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
            [
            'category_id' => 3,
            'name' =>  'Pulseira ' . fake()->unique()->word(),
            'price' => fake()->randomFloat(2, 90, 150),
            'detail' => fake()->sentence(20),
            'imgs' => "/images/pulseira-teste.png,/images/2.png,/images/3.png,/images/4.png,/images/5.png,/images/6.png",
            'bestseller' => 0
            ];
    }
}
