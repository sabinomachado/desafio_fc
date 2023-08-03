<?php

namespace App\Repositories;

use App\Interfaces\MedicoRepositoryInterface;
use App\Models\Medico;
use App\Models\Cidade;
use F9Web\ApiResponseHelpers;

class MedicoRepository implements MedicoRepositoryInterface 
{
    public function getAllMedicos() 
    {
        return Medico::all();
    }

    public function  getAllMedicosCidade($id_cidade)
    {
      
        $cidade = Cidade::find($id_cidade);

        if(!$cidade){
            $mensagem = "Por favor informe uma cidade válida";
            return response()->json([$mensagem], 400);
        }
        if($cidade){
            $medicos = Medico::where('cidade_id',$id_cidade)->get();
            if($medicos->isEmpty()){
                $mensagem = "Não existem médicos cadastrados para esta cidade";
                return response()->json([$mensagem], 200);
            }else{
                return response()->json([$medicos], 200);
            }
        }
    }
}