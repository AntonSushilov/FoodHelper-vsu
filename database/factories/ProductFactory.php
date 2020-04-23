<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
            'title'=> $faker->word(),
            'path_foto' => $faker->imageUrl($width=384, $height=250),
            'info' => $faker->text($maxNbChars = 30),
            'properties'=>$faker->text($maxNbChars = 200),
            'composition'=>$faker->words($nb = 3, $asText = false),
            'kcal'=>$faker->randomNumber(),
            'protein'=>$faker->randomNumber(),
            'fat'=>$faker->randomNumber(),
            'carbohydrate'=>$faker->randomNumber()
    ];
});
