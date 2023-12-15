<?php

namespace Database\Factories;

use App\Models\Docentes;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class docentesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Docentes::class;

    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'apellido' => $this->faker->lastName,
            'Correo_electronico' => $this->faker->email,
        ];
    }
}
