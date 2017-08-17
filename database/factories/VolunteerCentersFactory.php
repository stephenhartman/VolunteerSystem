<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\VolunteerCenter::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->firstName,
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode,
        'organization' => $faker->company,
        'description' => $faker->text,
    ];
});
