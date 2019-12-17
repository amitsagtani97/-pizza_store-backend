<?php

use App\Pizza;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        $size = 20;
        factory(Pizza::class, $size)->create();
    }
}
