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
        $size = 20;
        factory(User::class, $size)->create();
    }
}
