<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\PacienteRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PacienteRequest;
use Illuminate\Http\Response;
use App\Models\Paciente;
use F9Web\ApiResponseHelpers;
class PacienteController extends Controller
{

    use ApiResponseHelpers;
    private PacienteRepositoryInterface $pacientesRepository;

    public function __construct(PacienteRepositoryInterface $pacientesRepository) 
    {
        $this->pacientesRepository = $pacientesRepository;
        $this->setDefaultSuccessResponse([]);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PacienteRequest $request)
    {
        $paciente = $request->validated();
        $paciente = $this->pacientesRepository->store($paciente);
        return $this->respondWithSuccess($paciente);
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
    public function update(PacienteRequest $request, Paciente $paciente)
    {
        $validated = $request->only($paciente->getFillable());
        $id_paciente =  $request['id_paciente'];
        $paciente = $this->pacientesRepository->update($id_paciente, $validated);
        
        return $paciente;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
