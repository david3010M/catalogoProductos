<?php

namespace Database\Factories;

use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unidad>
 */
class UnidadFactory extends Factory
{
    protected $model = Unidad::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->randomElement(['unidad', 'kilogramo', 'litro', 'galon', 'caja']),
            'abreviatura' => $this->faker->randomElement(['un.', 'kg.', 'lt.', 'gl.', 'cj.']),
        ];
    }
}
