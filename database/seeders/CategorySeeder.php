<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(2)
            ->hasProducts(10)
            ->create();

        Category::factory(1)
            ->hasProducts(3)
            ->create();

        Category::factory(3)
            ->create();
    }
}
