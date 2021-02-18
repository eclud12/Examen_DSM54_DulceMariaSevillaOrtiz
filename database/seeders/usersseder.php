<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class usersseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        DB::table('users')->insert([
            'name' => ' Dulce',
            'email' => 'dulcesevilla45@gmail.com',
            'password' => '1234',

        ]);
    }
}
