<?php

/* @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Groups;
use App\Students;
use Faker\Generator as Faker;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'title' => $faker->name,
        'description' =>$faker->unique()->word,
        'average_math' =>$faker->numberBetween($min = 2, $max = 5),
        'average_lang_ru' =>$faker->numberBetween($min = 2, $max = 5),
        'average_lang_en' =>$faker->numberBetween($min = 2, $max = 5),
        'average_fizik' =>$faker->numberBetween($min = 2, $max = 5)  
    ];
});

$factory->define(Students::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'name' => $faker->name,
        'birth' => $faker->date
    ];
});