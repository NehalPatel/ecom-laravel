<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Nehal Patel',
        //     'email' => 'dev.sdjic@gmail.com',
        //     'user_type' => 'Admin',
        // ]);

        \App\Models\User::factory(10)->create();

        // \App\Models\Category::factory(10)->create();
        // \App\Models\Product::factory(10)->create();

        $categories = \App\Models\Category::factory(5)->create();
        // Create 10 products for each category
        $categories->each(function ($category) {
            \App\Models\Product::factory(10)->create(['category_id' => $category->id]);
        });
    }
}
