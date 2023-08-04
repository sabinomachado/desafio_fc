<?php

namespace App\Http\Controllers\Api;

use App\Interfaces\CidadeRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cidade;
use F9Web\ApiResponseHelpers;
class CidadeController extends Controller
{

    use ApiResponseHelpers;
    private CidadeRepositoryInterface $cidadeRepository;

    public function __construct(CidadeRepositoryInterface $cidadeRepository) 
    {
        $this->cidadeRepository = $cidadeRepository;
        $this->setDefaultSuccessResponse([]);

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cidades = $this->cidadeRepository->getAllCidades();
        
        return $this->respondWithSuccess($cidades);

    }

}
