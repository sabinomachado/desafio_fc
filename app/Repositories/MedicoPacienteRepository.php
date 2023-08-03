<?php

namespace App\Repositories;

use App\Interfaces\MedicoPacienteRepositoryInterface;
use App\Models\MedicoPaciente;
use F9Web\ApiResponseHelpers;

class MedicoPacienteRepository implements MedicoPacienteRepositoryInterface 
{
    public function store($validated) 
    {
        $medicoPaciente  =  MedicoPaciente::create([
            'medico_id' => $validated['medico_id'],
            'paciente_id' => $validated['paciente_id'],
        ]);

        return $medicoPaciente;
    }

    public function index() 
    {
        dd("aquiiii321321321iii");
        return Medico::all();
    }




 
}