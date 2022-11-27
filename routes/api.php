<?php

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

/*Route::post('/organizador/store', function (){
    return \App\Models\Organizador::create([
        'nome' => 'Diogo Andre',
        'email' => 'diogoandre@gmail.com',
        'password' => 'admin123',
        'updated_at' => '27/11/2022'
    ]);
});*/

Route::post('/participante/store', [ParticipanteController::class, 'store']);
Route::get('/participante/show/{id}', [ParticipanteController::class, 'show']);

Route::post('/organizador/store', [OrganizadorController::class, 'show']);
Route::get('/organizador/show/{id}', [OrganizadorController::class, 'show']);

Route::get('/eventos', [EventosController::class, 'index']);
Route::post('/eventos/store', [EventosController::class, 'store']);
Route::get('/eventos/show/{id}', [EventosController::class, 'show']);

Route::get('/inscrever_eventos', [ParticipanteInscreveEventosController::class, 'index']);
Route::post('/inscrever_eventos/store', [ParticipanteInscreveEventosController::class, 'store']);
Route::get('/inscrever_eventos/show/{id}', [ParticipanteInscreveEventosController::class, 'show']);

Route::get('/comentarios_evento', [ComentariosEventosController::class, 'index']);
Route::get('/comentarios_evento/store', [ComentariosEventosController::class, 'store']);
Route::get('/comentarios_evento/show/{id}', [ComentariosEventosController::class, 'show']);
