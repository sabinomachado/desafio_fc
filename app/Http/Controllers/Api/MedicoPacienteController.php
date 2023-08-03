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

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd("chegou aqui!");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd("chegou aqui!");
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
}
