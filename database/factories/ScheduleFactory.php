<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Schedule::class, function (Faker\Generator $faker) {

    return [
        'start_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'end_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'notes' => $faker->realText($maxNbChars = 40),
        'day_id' => rand(1,7),
    ];
});
