<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Interests::class, function (Faker\Generator $faker) {

    return [
        'interest' => $faker->safeColorName,
        'member_id' => rand(1,25)];
});
