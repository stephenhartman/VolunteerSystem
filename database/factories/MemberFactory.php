<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Member::class, function (Faker\Generator $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->userName,
        'password' => bcrypt('secret'),
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zipcode' => $faker->postcode,
        'home_phone' => $faker->phoneNumber,
        'work_phone' => $faker->phoneNumber,
        'cell_phone' => $faker->phoneNumber,
        'drivers_license' => $faker->boolean($chanceOfGettingTrue = 50),
        'ss_card' => $faker->boolean($chanceOfGettingTrue = 50),
        'approval_status' => $faker->randomElement($array = array ('pending', 'approved', 'disapproved', 'inactive')),
        'user_id' => 1,
    ];
});
