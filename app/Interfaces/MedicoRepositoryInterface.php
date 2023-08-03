<?php

namespace App\Interfaces;

interface MedicoRepositoryInterface 
{
    public function getAllMedicos() ;
    public function getAllMedicosCidade($id_cidade) ;
    public function createMedico($validated);
   
}