<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $table = "eventos";
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'imagem',
        'data_inicio',
        'data_fim',
        'localidade_inicio',
        'pergunta_evento_1',
        'pergunta_evento_2',
        'pergunta_evento_3',
        'pergunta_participante_1',
        'pergunta_participante_2',
        'localidade_fim',
        'requisitos',
        'descricao',
        'id_organizador_fk'
    ];

    public function organizador(){
        //Eloquent Relationships -> https://laravel.com/docs/9.x/eloquent-relationships
        return $this->belongsTo(Organizador::class);
    }

    public function comentariosEventos(){
        //Eloquent Relationships -> https://laravel.com/docs/9.x/eloquent-relationships
        return $this->hasMany(ComentariosEventos::class, 'id_evento_fk');
    }
}
