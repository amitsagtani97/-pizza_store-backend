<?php

use App\Pizza;
use Faker\Generator as Faker;

$links = [
    "https://i.pinimg.com/236x/03/4e/90/034e90d4c5772884ac25bd668599f50e.jpg",
    "https://i.pinimg.com/236x/da/a6/f7/daa6f7b3702895ee8fb5d38dd1d27c2b.jpg",
    "https://i.pinimg.com/236x/3f/06/28/3f06284aee57881e4039d42b6030b691.jpg",
    "https://i.pinimg.com/236x/98/b4/cd/98b4cd3a30230e3aab25617a1c1f613e.jpg",
    "https://i.pinimg.com/236x/91/bf/7f/91bf7f4130fffad3ad188f952a7fd5d3.jpg",
    "https://i.pinimg.com/236x/e4/ff/36/e4ff369ae3dc3bf6d57ce506fbff4659.jpg"
];

$factory->define(Pizza::class, function (Faker $faker) use ($links) {
    return [
        'name' => $faker->randomElement(["Pizza Margherita", "Marinara sauce", "Marinara", "Quattro Formaggi.", "Americana", "Rustica", "Campagnola", "Vegetariana", "Bufalina"]),
        'description' => $faker->sentence(10),
        'price' => $faker->numberBetween(100, 500),
        'image_link' => $faker->randomElement($links),
        'is_veg' => $faker->randomElement([0, 1]),
    ];
});
