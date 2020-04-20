<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Food::create([
            'title' => "Завтрак"
        ]);
        App\Food::create([
            'title' => "Обед"
        ]);
        App\Food::create([
            'title' => "Ужин"
        ]);
    }
}
