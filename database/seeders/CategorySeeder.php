<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['title' => 'Finance', 'slug' => 'finance', 'description' => 'Financial news and updates', 'created_by' => 1],
            ['title' => 'Technologie', 'slug' => 'technologie', 'description' => 'Latest in technology', 'created_by' => 1],
            ['title' => 'Santé', 'slug' => 'sante', 'description' => 'Health and wellness tips', 'created_by' => 1],
        ];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category['title'],
                'slug' => $category['slug'],
                'description' => $category['description'],
                'created_by' => $category['created_by'],
            ]);
        }
    }
}
