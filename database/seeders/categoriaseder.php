<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriaseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert([
            'nombre' => 'Juvenil',

        ]);
        DB::table('categoria')->insert([
            'nombre' => 'Juvenil',

        ]);
    }
}
