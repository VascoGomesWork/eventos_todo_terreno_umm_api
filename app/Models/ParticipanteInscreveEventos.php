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
        'resposta_evento_1',
        'resposta_evento_2',
        'resposta_evento_3',
        'resposta_participante_1',
        'resposta_participante_2',
        'id_participante_fk',
        'id_evento_fk'
    ];
}
