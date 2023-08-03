<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\MedicoRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Medico;
use F9Web\ApiResponseHelpers;

class MedicoController extends Controller
{

    use ApiResponseHelpers;
    private MedicoRepositoryInterface $medicosRepository;

    public function __construct(MedicoRepositoryInterface $medicosRepository) 
    {
        $this->medicosRepository = $medicosRepository;
        $this->setDefaultSuccessResponse([]);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = $this->medicosRepository->getAllMedicos();
        return $this->respondWithSuccess($medicos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

     /**
     * Lista médicos pela cidade específica.
     */
    public function medicosPorCidade(Request $request)
    {
        $id_cidade = $request['id_cidade'];

        return $medicosCidade = $this->medicosRepository->getAllMedicosCidade($id_cidade);

        //return $medicosCidade;
       

    }

    
}
