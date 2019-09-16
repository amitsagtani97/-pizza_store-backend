<?php

use App\Choice;
use Faker\Generator as Faker;

$factory->define(Choice::class, function (Faker $faker) {
    return [
		'order_id'=>$faker->numberBetween(0,100),
		'pizza_id'=>$faker->numberBetween(0,100),
		'quantity'=>$faker->numberBetween(0,100),
	];
});
