<?php

use App\Choice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        $size = 20;
        factory(Choice::class, $size)->create();
    }
}
