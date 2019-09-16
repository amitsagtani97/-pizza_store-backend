<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {
        $size = (integer)Config::get('mcs-helper.seeder.row_count');
        factory(User::class, $size)->create();
    }
}
