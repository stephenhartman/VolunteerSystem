<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Skill::class, function (Faker\Generator $faker) {

    return [
        'skill' => $faker->bs,
        'skill_level' => rand(1,10),
        'member_id' => rand(1,50)];
});
