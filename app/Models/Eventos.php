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
        'localidade_inicio',
        'pontos_passagem',
        'localidade_fim',
        'requisitos',
        'descricao',
        'id_organizador_fk'
    ];

    public function organizador(){
        return $this->belongsTo(Organizador::class);
    }
}
