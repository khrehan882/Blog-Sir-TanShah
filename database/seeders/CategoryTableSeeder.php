<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(["name"=>"Fashion"]);
        Category::create(["name"=>"Sports"]);
        Category::create(["name"=>"News"]);
        Category::create(["name"=>"Politics"]);
        Category::create(["name"=>"Body Care"]);
    }
}
