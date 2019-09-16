<?php

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
		'user_id'=>$faker->numberBetween(0,100),
		'total'=>$faker->word,
		'status'=>$faker->randomElement(['in_cart','in_processing','out_for_delivery','delivered']),
		'created_at'=>$faker->dateTime,
		'updated_at'=>$faker->dateTime,
		'stripe_token'=>$faker->sentence(10),
	];
});
