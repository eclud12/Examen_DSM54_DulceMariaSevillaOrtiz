<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class precioseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('precio')->insert([
            'imagen' => '1',
            'categoria_id' => '1',
            'users_id' => '1',

        ]);
    }
}
