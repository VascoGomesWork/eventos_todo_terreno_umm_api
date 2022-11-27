<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosEventos extends Model
{
    protected $table = "comentarios_eventos";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'comentario',
        'id_evento_fk',
        'id_participante_fk',
        'id_organizador_fk'
    ];
}
