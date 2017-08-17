<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Opportunity::class, function (Faker\Generator $faker) {

    return [
        'start_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'end_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'event_day' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'name' => $faker->catchPhrase,
        'volunteer_center_id' => function() {
            return factory(App\VolunteerCenter::class)->create()->id;
        },
    ];
});
