<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Organizador;
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
            'data_evento' => 'required',
            'id_organizador_fk' => 'required'
        ]);

        return Eventos::create($request->all());
    }

    public function show($id){
        //TODO - SHOW ALL DATA RELATIVE TO A SPECIFIC EVENT
        return Eventos::find($id);
    }
}
