<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cidade;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('pt_BR');
        $cidades = Cidade::all();
        return [
                'nome' => $faker->name,
                'especialidade' => $faker->text($maxNbChars = 10),
                'cidade_id' => $cidades->random()->id,
        ];
    }
}
