<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Organizador;
use App\Models\Participante;
use App\Models\ParticipanteInscreveEventos;
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
            'data_inicio' => 'required',
            'data_fim' => 'required',
            'localidade_inicio' => 'required',
            'pergunta_evento_1' => 'required',
            'pergunta_evento_2' => 'required',
            'pergunta_evento_3' => 'required',
            'pergunta_participante_1' => 'required',
            'pergunta_participante_2' => 'required',
            'localidade_fim' => 'required',
            'requisitos' => 'required',
            'descricao' => 'required',
            'id_organizador_fk' => 'required'
        ]);

        return Eventos::create($request->all());
    }

    public function show($id){
        //TODO - SHOW ALL DATA RELATIVE TO A SPECIFIC EVENT
        return Eventos::find($id);
    }
}
