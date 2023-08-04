<?php

namespace App\Repositories;

use App\Interfaces\MedicoPacienteRepositoryInterface;
use App\Models\MedicoPaciente;
use App\Models\Medico;
use F9Web\ApiResponseHelpers;

class MedicoPacienteRepository implements MedicoPacienteRepositoryInterface 
{
    public function store($validated) 
    {

        $medico = Medico::find($validated['medico_id']);
        $paciente = Medico::find($validated['paciente_id']);

        if($medico != null  &&  $paciente != null){
            $medicoPaciente  =  MedicoPaciente::create([
                'medico_id' => $validated['medico_id'],
                'paciente_id' => $validated['paciente_id'],
            ]);

            return $medicoPaciente;
        }else{
            if($medico == null and $paciente == null){
                $mensagem = "Verifique se os valores inseridos são válidos";
            }
            if($medico == null){
                $mensagem = "Verifique se os valor medico_id é um valor válido";
            }
            if($paciente == null){
                $mensagem = "Verifique se os valor paciente_id é um valor válido";
            }

            return response()->json([$mensagem], 400);
        }
       
    }

    public function list($id_medico) 
    {;
        $medico = Medico::find($id_medico);

        if(!$medico){
            dd("chegou aqui");
            $mensagem = "Por favor informe um Médico(a) válido(a)";
            return response()->json([$mensagem], 400);
        }
        if($medico){
            $medico = Medico::where('id',$id_medico)->first();
            if($medico == null){
                $mensagem = "Não existem médicos cadastrados para esta medico";
                return response()->json([$mensagem], 200);
            }else{
                return response()->json([$medico], 200);
            }
        }
    }




 
}