<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\EmergencyContact::class, function (Faker\Generator $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode,
        'home_phone' => $faker->phoneNumber,
        'work_phone' => $faker->phoneNumber,
        'cell_phone' => $faker->phoneNumber,
        'member_id' => rand(1,50)
    ];
});
