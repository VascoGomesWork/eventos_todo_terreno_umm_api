<?php

use App\Http\Controllers\ParticipanteController;
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
//Route::get('/clienteinscreveevento/{post}', [\App\Http\Controllers\ClienteInscreveEventoController::class, 'show']);*/
