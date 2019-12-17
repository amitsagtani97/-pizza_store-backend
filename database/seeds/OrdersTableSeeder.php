<?php

use App\Order;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        $size = 20;
        factory(Order::class, $size)->create();
    }
}
