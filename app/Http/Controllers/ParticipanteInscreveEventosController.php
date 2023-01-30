<?php

namespace App\Http\Controllers;

use App\Models\ComentariosEventos;
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

        //https://laracasts.com/discuss/channels/laravel/non-static-method-appmodelsemployeegetemployeename-should-not-be-called-statically-assuming-this-from-incompatible-context
        //É criada uma nova instância do controlador ComentariosEventos
        $comentario = new ComentariosEventosController();
        //É feita a validação dos campos
        $comentariosRequest = $request->validate([
            'comentario' => 'required',
            'id_evento_fk' => 'required',
            'id_participante_fk' => 'required',
            'id_organizador_fk' => 'required'
        ]);
        //O Comentário é criado
        ComentariosEventos::create($comentariosRequest);

        return $participante_Inscreve_Evento;
    }

    public function show($id){
        return ParticipanteInscreveEventos::find($id);
    }

    public function count($id){
        //https://stackoverflow.com/questions/33676576/eloquent-laravel-how-to-get-a-row-count-from-a-get
        return ParticipanteInscreveEventos::where('id_participante_fk', '<=', $id)->count();
    }

    public function countOrganizador($id){
        //https://stackoverflow.com/questions/33676576/eloquent-laravel-how-to-get-a-row-count-from-a-get
        return ParticipanteInscreveEventos::where('id_organizador_fk', '<=', $id)->count();
    }
}
