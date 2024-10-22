<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'technology',
                'description' => 'products and services related with the technology'
            ],
            [
                'name' => 'home',
                'description' => 'products for decoration and home'
            ],
            [
                'name' => 'moda',
                'description' => 'clothes, accesories and tendencies related with fashion'
            ],
            [
                'name' => 'food',
                'description' => 'food, beverages and products related to food'
            ],
            [
                'name' => 'sports',
                'description' => 'sporty equipment, accesories and clothes'
            ]
            ];
            foreach ($categories as $category) {
                Category::firstOrCreate(['name' => $category['name']], ['description' => $category['description']]);
            }
    }
}
