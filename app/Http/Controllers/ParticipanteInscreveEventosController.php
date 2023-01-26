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
            'id_evento_fk' => 'required'
        ]);

        return ParticipanteInscreveEventos::create($request->all());
    }

    public function show($id){
        return ParticipanteInscreveEventos::find($id);
    }
}
