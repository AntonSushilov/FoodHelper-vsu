<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Product::create([
            'title' => "Помидор",
            'path_foto' => "0",
            'info' => "Помидор красный",
            'properties' => "Очень полезен",
            'composition' => "вода и мякоть",
            'kcal' => "12",
            'protein' => "12",
            'fat' => "12",
            'carbohydrate' => "12"
        ]);
        App\Product::create([
            'title' => "Морковь",
            'path_foto' => "0",
            'info' => "Морковь оранжевая",
            'properties' => "Очень полезенf",
            'composition' => "мякоть",
            'kcal' => "123",
            'protein' => "123",
            'fat' => "123",
            'carbohydrate' => "123"
        ]);
        App\Product::create([
            'title' => "Картошка",
            'path_foto' => "0",
            'info' => "Овощь",
            'properties' => "Очень полезен",
            'composition' => "мякоть",
            'kcal' => "1234",
            'protein' => "1234",
            'fat' => "1234",
            'carbohydrate' => "1234"
        ]);
    }
}
