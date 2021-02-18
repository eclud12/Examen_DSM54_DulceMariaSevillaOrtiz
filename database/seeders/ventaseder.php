<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ventaseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venta')->insert([
            'producto_id' => '1',
            'nombre' => 'Dulce Maria',
            'cliente_id' => '1',
            'total' => '150',

        ]);
    }
}
