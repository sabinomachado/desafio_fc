<?php

namespace App\Repositories;

use App\Interfaces\MedicoPacienteRepositoryInterface;
use App\Models\Medico;
use App\Models\Cidade;
use F9Web\ApiResponseHelpers;

class MedicoRepository implements MedicoRepositoryInterface 
{
    public function store() 
    {
        dd("aquiiiiiii");
        return Medico::all();
    }



 
}