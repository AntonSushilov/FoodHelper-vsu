<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dish;
use Faker\Generator as Faker;

$factory->define(Dish::class, function (Faker $faker) {
    return [
        'title'=> $faker->word(),
        'path_foto' => $faker->imageUrl($width=384, $height=250),
        'info' => $faker->text($maxNbChars = 30),
        'recipe'=>$faker->text($maxNbChars = 200),
        'kcal'=>$faker->randomNumber(),
        'protein'=>$faker->randomNumber(),
        'fat'=>$faker->randomNumber(),
        'carbohydrate'=>$faker->randomNumber()

    ];
});
