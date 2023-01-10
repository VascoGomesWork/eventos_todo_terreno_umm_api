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

    public function registar_organizador(Request $request){
        $fields = $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $organizador = Organizador::create([
            'nome' => $fields['nome'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);

        $token = $organizador->createToken('MeuToken')->plainTextToken;

        $response = [
            'organizador' => $organizador,
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
        $token = "";

        //Checks Participante Email
        $participante = Participante::where('email', $fields['email'])->first();

        //Checks Organizador Email

        if($participante != NULL && Hash::check($fields['password'], $participante->password)){
            //return response(['message' => 'Bad Credentials Participante', 401]);
            $token = $participante->createToken('MeuToken')->plainTextToken;
            //if($token != null){
                $user = $participante;
                $type = "participante";
            //}
        } else {

            $organizador = Organizador::where('email', $fields['email'])->first();
            //echo 'Organizador = ' . $organizador;
            //echo 'Password Filed = ' . $fields['password'];
            //echo 'Organizador Password = ' . $organizador->password;
            //echo 'CHECK = ' . Hash::check($fields['password'], $organizador->password);
            //Checks Participante Password
            if ($organizador != NULL || Hash::check($fields['password'], $organizador->password) != NULL) {
                //return response(['message' => 'Bad Credentials Organizador', 401]);
                //echo 'TESTE';
                $token = $organizador->createToken('MeuToken')->plainTextToken;
                $user = $organizador;
                $type = "organizador";
            }
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
