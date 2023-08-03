<?php

namespace App\Repositories;

use App\Interfaces\PacienteRepositoryInterface;
use App\Models\Paciente;

class PacienteRepository implements PacienteRepositoryInterface 
{
    public function update($id_paciente, $validated) 
    {
       // dd($id_paciente, $validated);
        $paciente = Paciente::find($id_paciente);
       // dd($paciente);

        if(!$paciente){
            $mensagem = "Por favor informe um paciente válida";
            return response()->json([$mensagem], 400);
        }
        if($paciente){
            $paciente = Paciente::find($id_paciente);
            $paciente->fill($validated);
            return response()->json([$paciente], 200);
           
        }
    }
}