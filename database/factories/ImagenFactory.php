<?php

namespace Database\Factories;

use App\Models\Imagen;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImagenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'categoria_id'=> $this->faker->categoria_id,
            'users_id'=> $this->faker->users_id,
            'cliente_id'=> $this->faker->cliente_id,
            'venta_id'=> $this->faker->venta_id,
        ];
    }
}
