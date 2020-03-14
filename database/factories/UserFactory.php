<?php

use App\Film;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
        $faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'kode' => $faker->numberBetween(25,40),
        'judul' => $faker->word,
        'pemain' => $faker->name,
         'sinopsis' => $faker->word,
         'genre' => $faker->word,
         'image' => $faker->picsum('public/images', 100, 100, false)

    ];
});
