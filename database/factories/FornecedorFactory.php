<?php

namespace Database\Factories;

use App\Enums\PortePessoaJuridicaEnum;
use App\Enums\TipoDocumentoPessoaJuridicaEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => fake()->uuid(),
            'razao_social' => fake()->company(),
            'nome_fantasia' => fake()->company(),
            'porte' => PortePessoaJuridicaEnum::getRandomValue(),
            'tipo_documento' => TipoDocumentoPessoaJuridicaEnum::getRandomValue(),
            'documento' => fake()->numberBetween(1147483647, 2147483647),
        ];
    }
}
