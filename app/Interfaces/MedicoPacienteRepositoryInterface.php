<?php

namespace App\Interfaces;

interface MedicoPacienteRepositoryInterface 
{
    public function store($validated) ;
    public function list($id_medico) ;
    
   
}