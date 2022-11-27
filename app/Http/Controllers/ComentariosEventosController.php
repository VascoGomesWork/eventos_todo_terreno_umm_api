<?php

namespace App\Http\Controllers;

use App\Models\ComentariosEventos;
use Illuminate\Http\Request;

class ComentariosEventosController extends Controller
{
    public function index(){
        return ComentariosEventos::all();
    }

    public function store(Request $request){

        $request->validate([
            'comentario' => 'required',
            'id_evento_fk' => 'required',
            'id_participante_fk' => 'required',
            'id_organizador_fk' => 'required'
        ]);

        return ComentariosEventos::create($request->all());
    }

    public function show($id){
        return ComentariosEventos::find($id);
    }
}
