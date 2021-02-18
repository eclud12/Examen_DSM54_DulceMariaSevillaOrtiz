<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class productosseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        DB::table('productos')->insert([
            'nombre' => 'Blusa',
            'cantidad' => '1',
            'descripcion' => 'Talla:grande',

        ]);
    }
}
