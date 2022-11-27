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
        'matricula_umm',
        'num_acompanhantes',
        'id_participante_fk',
        'id_evento_fk'
    ];
}
