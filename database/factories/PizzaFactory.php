<?php

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(10),
        'description' => $faker->sentence(10),
        'price' => $faker->numberBetween(100, 500),
        'image_link' => $faker->sentence(10),
        'size' => $faker->randomElement(['regular', 'medium', 'large']),
    ];
});
