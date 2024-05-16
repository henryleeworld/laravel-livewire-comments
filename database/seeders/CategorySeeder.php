<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::factory()->count(10)->create()->each(fn($category) => Post::factory()->count(5)->create(['category_id' => $category->id]));
        Schema::enableForeignKeyConstraints();
    }
}
