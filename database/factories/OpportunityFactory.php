<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Opportunity::class, function (Faker\Generator $faker) {

$unix_timestamp = '1514758421';

    return [
        'start_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'end_time' => $faker->time($format = 'H:i:s', $min = 'now'),
        'event_day' => $faker->dateTimeBetween('now', $unix_timestamp),
        'name' => $faker->catchPhrase,
        'volunteer_center_id' => rand(1,10),
    ];
});
