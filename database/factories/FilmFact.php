<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Film;
use Faker\Generator as Faker;

$factory->define(Film::class, function (Faker $faker) {
	$faker->addProvider(new \Mmo\Faker\PicsumProvider($faker));
    return [
        'kode' => $faker->numberBetween(25,40),
        'judul' => $faker->word,
        'pemain' => $faker->name,
         'sinopsis' => $faker->word,
         'genre' => $faker->word,
         'image' => $faker->picsum('public/images/contoh.jpg', 100, 100, true)

    ];
});
