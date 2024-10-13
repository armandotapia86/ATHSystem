<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //creamos las semillas definiéndolas para cada uno de los atributos de la tabla productos.
            'nombre' => fake()->word(),
            'descripcion' => fake()->text(),
            'precio' => fake()->numberBetween(10000, 500000),
            'stock' => fake()->numberBetween(1, 50) 
        ];
    }
}
