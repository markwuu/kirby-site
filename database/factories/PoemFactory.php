<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Poem;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Poem::class, function (Faker $faker) {
    return [
        'title' => $faker->name(10),
        'body' => $faker->text(750),
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
