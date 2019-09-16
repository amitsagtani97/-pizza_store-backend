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
        $size = (integer)Config::get('mcs-helper.seeder.row_count');
        factory(Choice::class, $size)->create();
    }
}
