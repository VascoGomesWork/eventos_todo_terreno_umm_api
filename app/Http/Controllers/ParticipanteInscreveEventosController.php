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
            'matricula_umm' => 'required',
            'num_acompanhantes' => 'required',
            'id_participante_fk' => 'required',
            'id_evento_fk' => 'required'
        ]);

        return ParticipanteInscreveEventos::create($request->all());
    }

    public function show($id){
        return ParticipanteInscreveEventos::find($id);
    }
}
