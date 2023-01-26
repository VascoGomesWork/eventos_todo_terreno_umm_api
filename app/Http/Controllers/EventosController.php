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

        //Not Required -> https://stackoverflow.com/questions/46790048/laravel-do-not-validate-if-field-is-not-required
        $request->validate([
            'nome' => 'required',
            'imagem' => 'required',
            'localidade_inicio' => 'required',
            'pergunta_evento' => 'required',
            'resposta_evento' => 'nullable',
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
