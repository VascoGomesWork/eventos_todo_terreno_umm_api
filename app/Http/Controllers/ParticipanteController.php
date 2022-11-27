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
            'password' => 'required'
        ]);

        return Participante::create($request->all());
    }

    public function show($id){
        return Participante::find($id);
    }
}
