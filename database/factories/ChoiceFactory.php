<?php

use App\Choice;
use Faker\Generator as Faker;

$factory->define(Choice::class, function (Faker $faker) {
    return [
		'order_id'=>$faker->numberBetween(1,15),
		'pizza_id'=>$faker->numberBetween(1,15),
		'quantity'=>$faker->numberBetween(1,5),
	];
});
