<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\MedicoPacienteRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MedicoPacienteRequest;
use Illuminate\Http\Response;
use F9Web\ApiResponseHelpers;

class MedicoPacienteController extends Controller
{

    use ApiResponseHelpers;
    private MedicoPacienteRepositoryInterface $medicosPacienteRepository;

    public function __construct(MedicoPacienteRepositoryInterface $medicosPacienteRepository) 
    {
        $this->medicosPacienteRepository = $medicosPacienteRepository;
        $this->setDefaultSuccessResponse([]);
        $this->middleware('auth:api');

    }

    /**
     * Display a listing of the resource.
     */
    public function list(Request $request)
    {
        $id_medico = $request['id_medico'];
        $pacientesMedico = $this->medicosPacienteRepository->list($id_medico);
        return $pacientesMedico;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicoPacienteRequest $request)
    {
        $validated = $request->validated();
        $medicoPaciente = $this->medicosPacienteRepository->store($validated);
 
        return $medicoPaciente;
    }

}
