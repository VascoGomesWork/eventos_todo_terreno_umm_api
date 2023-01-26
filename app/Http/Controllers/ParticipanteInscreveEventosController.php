<?php

namespace App\Http\Controllers;

use App\Models\ParticipanteInscreveEventos;
use Illuminate\Http\Request;

class ParticipanteInscreveEventosController extends Controller
{
    public function index(){
        return ParticipanteInscreveEventos::all();
    }

    public function store(Request $request){

        $request->validate([
            'pergunta_inscricao_evento_1' => 'required',
            'resposta_inscricao_evento_1' => 'nullable',
            'pergunta_inscricao_evento_2' => 'required',
            'resposta_inscricao_evento_2' => 'nullable',
            'id_participante_fk' => 'required',
            'id_evento_fk' => 'required'
        ]);

        return ParticipanteInscreveEventos::create($request->all());
    }

    public function show($id){
        return ParticipanteInscreveEventos::find($id);
    }
}
