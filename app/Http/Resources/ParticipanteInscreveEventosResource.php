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
            'pergunta_inscricao_evento_1' => $this->pergunta_inscricao_evento_1,
            'resposta_inscricao_evento_1' => $this->resposta_inscricao_evento_1,
            'pergunta_inscricao_evento_2' => $this->pergunta_inscricao_evento_2,
            'resposta_inscricao_evento_2' => $this->resposta_inscricao_evento_2,
            'id_participante_fk' => $this->id_participante_fk,
            'id_evento_fk' => $this->id_evento_fk
        ];
    }
}
