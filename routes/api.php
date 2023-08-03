<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\CidadeController;
use App\Http\Controllers\Api\MedicoController;
use App\Http\Controllers\Api\MedicoPacienteController;
use App\Http\Controllers\Api\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/cidades', [CidadeController::class, 'index']);

Route::get('/medicos', [MedicoController::class, 'index']);
Route::post('/medicos', [MedicoController::class, 'store'])->middleware('api');
Route::get('/cidades/{id_cidade}/medicos', [MedicoController::class, 'medicosPorCidade']);

Route::get('/medicos/{id_medico}/pacientes .', [MedicoPacienteController::class, 'create'])->middleware('api');

Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers\Api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});