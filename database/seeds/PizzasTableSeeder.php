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
        $size = (integer)Config::get('mcs-helper.seeder.row_count');
        factory(Pizza::class, $size)->create();
    }
}
