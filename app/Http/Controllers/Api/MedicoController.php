<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\MedicoRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Medico;

class MedicoController extends Controller
{

    private MedicoRepositoryInterface $medicosRepository;

    public function __construct(MedicoRepositoryInterface $medicosRepository) 
    {
        $this->medicosRepository = $medicosRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          return response()->json([
            'data' => $this->medicosRepository->getAllMedicos()
        ]);
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
}
