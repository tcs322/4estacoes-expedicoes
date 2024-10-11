<?php

namespace Database\Factories;

use App\Enums\SituacaoEquipeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Equipe;

class EquipeFactory extends Factory
{
    protected $model = Equipe::class;

    public function definition()
    {
        return [
            'uuid' => fake()->uuid(),
            'nome' => 'Equipe '.fake()->company(),
            'situacao' => SituacaoEquipeEnum::ATIVO,
        ];
    }
}
