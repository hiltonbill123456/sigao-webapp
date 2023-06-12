<?php

namespace Database\Factories;

use App\Models\Entidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EntidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Entidade::class;
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'dni' => $this->faker->randomNumber(8),
            'direccion' => $this->faker->address(),
            'celular' => $this->faker->phoneNumber(),
        ];
    }
}