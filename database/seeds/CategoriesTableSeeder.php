<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
            'title' => "Первое",
        ]);
        App\Category::create([
            'title' => "Второе",
        ]);
        App\Category::create([
            'title' => "Третье",
        ]);
    }
}
