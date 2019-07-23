<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Achievements;
use Faker\Generator as Faker;

$factory->define(Achievements::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'name' => $faker->name
    ];
});
