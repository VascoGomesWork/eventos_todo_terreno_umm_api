<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index(){
        return Eventos::all();
    }

    public function store(Request $request){

        $request->validate([
            'nome' => 'required',
            'imagem' => 'required',
            'localidade_inicio' => 'required',
            'pontos_passagem' => 'required',
            'localidade_fim' => 'required',
            'requisitos' => 'required',
            'descricao' => 'required',
            'id_organizador_fk' => 'required'
        ]);

        return Eventos::create($request->all());
    }

    public function show($id){
        return Eventos::find($id);
    }
}
