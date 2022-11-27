<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participante;
use App\Models\Organizador;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function registar_participante(Request $request){
        $fields = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $participante = Participante::create([
            'nome' => $fields['nome'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $participante->createToken('MeuToken')->plainTextToken;

        $response = [
            'participante' => $participante,
            'token' => $token
        ];

        return response($response, 201);
    }
}
