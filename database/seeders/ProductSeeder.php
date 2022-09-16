<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        /*for ($i = 1; $i <= 30; $i++){
            DB::table('products')->insert([
                'category_id' => 1,
                'name' =>  'Anél ' . fake()->word(),
                'price' => fake()->randomFloat(2, 90, 150),
                'detail' => fake()->sentence(20),
                'imgs' => "/images/anel-teste.png,/images/2.png,/images/3.png,/images/4.png,/images/5.png,/images/6.png",
                'bestseller' => 0
            ]);
        }*/

        DB::table('products')->insert([
            'category_id' => 1,
            'name' =>  'Anél Pigas',
            'price' => fake()->randomFloat(2, 90, 150),
            'detail' => fake()->sentence(20),
            'imgs' => "/images/anel-teste.png,/images/2.png,/images/3.png,/images/4.png,/images/5.png,/images/6.png",
            'bestseller' => 1
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'name' =>  'Colar Bigas',
            'price' => fake()->randomFloat(2, 90, 150),
            'detail' => fake()->sentence(20),
            'imgs' => "/images/colar-teste.png,/images/2.png,/images/3.png,/images/4.png,/images/5.png,/images/6.png",
            'bestseller' => 1
        ]);
        DB::table('products')->insert([
            'category_id' => 2,
            'name' =>  'Pulseira Digas',
            'price' => fake()->randomFloat(2, 90, 150),
            'detail' => fake()->sentence(20),
            'imgs' => "/images/pulseira-teste.png,/images/2.png,/images/3.png,/images/4.png,/images/5.png,/images/6.png",
            'bestseller' => 1
        ]);

    }
}
