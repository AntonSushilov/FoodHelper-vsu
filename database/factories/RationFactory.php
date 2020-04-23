<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ration;
use Faker\Generator as Faker;

$factory->define(Ration::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'info' => $faker->text($maxNbChars = 30)
    ];
});
