<?php

namespace Database\Factories;

use App\Models\PostoTrabalho;
use App\Models\Setor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Departamento>
 */
class DepartamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid,
            'nome' => 'Departamento '.fake()->company,
            'postos_trabalho_uuid' => PostoTrabalho::inRandomOrder()->first()->uuid,
            'setores_uuid' => Setor::inRandomOrder()->first()->uuid
        ];
    }
}
