<?php

namespace App\Repositories;

use App\Interfaces\MedicoRepositoryInterface;
use App\Models\Medico;

class MedicoRepository implements MedicoRepositoryInterface 
{
    public function getAllMedicos() 
    {
        return Medico::all();
    }
}