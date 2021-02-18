<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class imagenseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('imagen')->insert([
            'categoria_id' => '1',
            'users_id' => '1',
            'cliente_id' => '1',
            'venta_id' => '1',

        ]);
    }
}
