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
            'matricula_umm' => $this->matricula_umm,
            'num_acompanhantes' => $this->num_acompanhantes,
            'id_participante_fk' => $this->id_participante_fk,
            'id_evento_fk' => $this->id_evento_fk
        ];
    }
}
