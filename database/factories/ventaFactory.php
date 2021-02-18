<?php

namespace Database\Factories;

use App\Models\venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class ventaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto_id'=> $this->faker->nombre,
            'nombre'=> $this->faker->nombre,
            'cliente_id'=> $this->faker->nombre,
            'total'=> $this->faker->nombre,
        ];
    }
}
