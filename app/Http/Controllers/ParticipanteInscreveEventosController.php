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
            'resposta_evento_1' => 'required',
            'resposta_evento_2' => 'required',
            'resposta_evento_3' => 'required',
            'resposta_participante_1' => 'required',
            'resposta_participante_2' => 'required',
            'id_participante_fk' => 'required',
            'id_evento_fk' => 'required',
            'comentario' => 'required',
            'id_organizador_fk' => 'required'
        ]);

        //Inscreve o Participante Primeiro no Evento
        $participante_Inscreve_Evento = ParticipanteInscreveEventos::create($request->all());
        //De seguida Regista o comentário do mesmo acerca do evento
        //TODO - FIX
        ComentariosEventosController::store([$request->comentario, $request->id_evento_fk, $request->id_participante_fk, $request->id_organizador_fk]);

        return $participante_Inscreve_Evento;
    }

    public function show($id){
        return ParticipanteInscreveEventos::find($id);
    }
}
