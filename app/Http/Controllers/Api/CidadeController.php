<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\CidadeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cidade;
class CidadeController extends Controller
{

    private CidadeRepositoryInterface $cidadeRepository;

    public function __construct(CidadeRepositoryInterface $cidadeRepository) 
    {
        $this->cidadeRepository = $cidadeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => $this->cidadeRepository->getAllCidades()
        ]);
        // $cidades = Cidade::all();

        // return response()->json($cidades);
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
