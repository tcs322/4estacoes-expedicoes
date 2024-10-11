<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cargo;

class CargoFactory extends Factory
{
    protected $model = Cargo::class;

    public function definition()
    {
        return [
            'uuid' => $this->faker->uuid,
            'nome' => $this->faker->jobTitle,
        ];
    }
}
