<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipanteInscreveEventos extends Model
{
    use HasFactory;
    protected $table = "participante_inscreve_eventos";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'pergunta_inscricao_evento_1',
        'resposta_inscricao_evento_1',
        'pergunta_inscricao_evento_2',
        'resposta_inscricao_evento_2',
        'id_participante_fk',
        'id_evento_fk'
    ];
}
