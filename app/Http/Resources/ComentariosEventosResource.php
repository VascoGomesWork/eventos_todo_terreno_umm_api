<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ComentariosEventosResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'comentario' => $this->comentario,
            'id_evento_fk' => $this->id_evento_fk,
            'id_participante_fk' => $this->id_participante_fk,
            'id_organizador_fk' => $this->id_organizador
        ];
    }
}
