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

    public function login(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = "";
        $type = "";

        //Checks Participante
        //Checks Participante Email
        $participante = Participante::where('email', $fields['email'])->first();

        //Checks Participante Password
        if(!$participante || !Hash::check($fields['password'], $participante->password)){
            return response(['message' => 'Bad Credentials', 401]);
        }
        $token = $participante->createToken('MeuToken')->plainTextToken;
        if($token != null){
            $user = $participante;
            $type = "participante";
        }
        else {

            //Checks Organizador
            //Checks Organizador Email
            $organizador = Organizador::where('email', $fields['email'])->first();

            //Checks Participante Password
            if (!$organizador || !Hash::check($fields['password'], $organizador->password)) {
                return response(['message' => 'Bad Credentials', 401]);
            }

            $token = $organizador->createToken('MeuToken')->plainTextToken;
            $user = $organizador;
            $type = "organizador";
        }

        $response = [
            'user' => $user,
            'type' => $type,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request){
        auth()->user()->tokens()->delete();

        return ['message' => 'Log Out'];
    }


}
