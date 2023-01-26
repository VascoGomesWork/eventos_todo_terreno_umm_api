<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'pergunta_participante_1' => 'required',
            'resposta_participante_1' => 'nullable',
            'pergunta_participante_2' => 'required',
            'resposta_participante_2' => 'nullable',
            'password' => 'required'
        ]);

        return Participante::create($request->all());
    }

    public function show($id){
        return Participante::find($id);
    }
}
