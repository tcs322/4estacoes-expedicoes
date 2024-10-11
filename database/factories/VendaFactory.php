<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Lote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venda>
 */
class VendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $lote = Lote::inRandomOrder()->first();

        return [
            'uuid' => $this->faker->uuid,
            'cliente_uuid' => Cliente::inRandomOrder()->first()->uuid,
            'lote_uuid' => $lote->uuid,
        ];
    }
}
