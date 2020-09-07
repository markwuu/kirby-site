<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Poem;
use Faker\Generator as Faker;

$factory->define(Poem::class, function (Faker $faker) {
    return [
        'title' => $faker->name(10),
        'body' => $faker->text(100),
    ];
});
