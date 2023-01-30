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
        //Eloquent Relationships -> https://laravel.com/docs/9.x/eloquent-relationships

        //Creates New Array That Contains All Data
        $eventoFinal = array();

        //Pushes the Evento Especefico Data to eventoFinal Array
        array_push($eventoFinal, Eventos::find($id));

        //Loops Through All the Comments
        foreach (Eventos::find($id)->comentariosEventos as $comentarioEvento){
            //Pushes the Comentario Especifico to the Evento into the Array
            array_push($eventoFinal, $comentarioEvento);
        }
        //Returns Evento Final
        return $eventoFinal;
    }

    public function count($id){
        //https://stackoverflow.com/questions/33676576/eloquent-laravel-how-to-get-a-row-count-from-a-get
        return Eventos::where('id_organizador_fk', '<=', $id)->count();
    }
}
