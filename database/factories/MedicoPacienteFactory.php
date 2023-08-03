<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medico;
use App\Models\Paciente;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicoPaciente>
 */
class MedicoPacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        return [
                'medico_id' => $medicos->random()->id,
                'paciente_id' => $pacientes->random()->id,
        ];
    }
}
