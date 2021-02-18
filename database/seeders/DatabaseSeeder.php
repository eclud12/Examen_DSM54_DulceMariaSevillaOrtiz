<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(categoriaseder::class);
        $this->call(clienteseder::class);
        $this->call(imagenseder::class);
        $this->call(precioseder::class);
        $this->call(productosseder::class);
        $this->call(usersseder::class);
        $this->call(ventaseder::class);
    }
}
