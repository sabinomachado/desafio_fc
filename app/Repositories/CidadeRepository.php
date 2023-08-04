<?php

namespace App\Repositories;

use App\Interfaces\CidadeRepositoryInterface;
use App\Models\Cidade;

class CidadeRepository implements CidadeRepositoryInterface 
{
    public function getAllCidades() 
    {
        return Cidade::all();
    }
}