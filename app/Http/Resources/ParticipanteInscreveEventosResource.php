<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipanteInscreveEventosResource extends JsonResource
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
            'resposta_evento_1' => $this->resposta_evento_1,
            'resposta_evento_2' => $this->resposta_evento_2,
            'resposta_evento_3' => $this->resposta_evento_3,
            'resposta_participante_1' => $this->resposta_participante_1,
            'resposta_participante_2' => $this->resposta_participante_2,
            'id_participante_fk' => $this->id_participante_fk,
            'id_evento_fk' => $this->id_evento_fk
        ];
    }
}
