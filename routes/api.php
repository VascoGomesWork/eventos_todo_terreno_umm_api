<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ComentariosEventosController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\OrganizadorController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\ParticipanteInscreveEventosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//https://youtu.be/MT-GJQIY3EU: Consultado a 27/11/2022
//Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function (){
    Route::post('/eventos/store', [EventosController::class, 'store']);
    Route::post('/inscrever_eventos/store', [ParticipanteInscreveEventosController::class, 'store']);
    Route::post('/comentarios_evento/store', [ComentariosEventosController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

//Registo e Login
Route::post('/registar', [AuthController::class, 'registar_participante']);
Route::post('/registar_organizador', [AuthController::class, 'registar_organizador']);
Route::post('/login', [AuthController::class, 'login']);

//Registar Participante e Visualizar Participante Especifico
Route::get('/participante/show/{id}', [ParticipanteController::class, 'show']);

//Registar Organizador e Visualizar Organizador Especifico
Route::get('/organizador/show/{id}', [OrganizadorController::class, 'show']);

//Ver Todos os Eventos e Visualizar Evento Especifico
Route::get('/eventos', [EventosController::class, 'index']);
Route::get('/eventos/show/{id}', [EventosController::class, 'show']);
Route::get('/eventos/count/{id}', [EventosController::class, 'count']);

//Ver Todos os Eventos Inscritos e Visualizar Evento Inscrito Especifico
Route::get('/inscrever_eventos', [ParticipanteInscreveEventosController::class, 'index']);
Route::get('/inscrever_eventos/show/{id}', [ParticipanteInscreveEventosController::class, 'show']);
Route::get('/inscrever_eventos/count/{id}', [ParticipanteInscreveEventosController::class, 'count']);

//Ver Todos os Comentarios e Visualizar Comentario Especifico
Route::get('/comentarios_evento', [ComentariosEventosController::class, 'index']);
Route::get('/comentarios_evento/show/{id}', [ComentariosEventosController::class, 'show']);
