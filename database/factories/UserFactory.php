<?php

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'display_name' => $faker->sentence(10),
        'email' => $faker->email,
        'address' => $faker->sentence(10),
        'phone_number' => $faker->sentence(10),
        'created_at' => $faker->dateTime,
    ];
});
