<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::factory(10)->create()->each(fn($category) => Post::factory(5)->create(['category_id' => $category->id]));
        Schema::enableForeignKeyConstraints();
    }
}
