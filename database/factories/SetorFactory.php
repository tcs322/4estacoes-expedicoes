<?php

namespace Database\Factories;

use App\Models\PostoTrabalho;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setor>
 */
class SetorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => 'Setor '.fake()->company,
            'uuid' => fake()->uuid,
            'postos_trabalho_uuid' => PostoTrabalho::inRandomOrder()->first()->uuid,
        ];
    }
}
