<?php

namespace App\Interfaces;

interface PacienteRepositoryInterface 
{
    public function update($id_paciente, $validated) ;   
}