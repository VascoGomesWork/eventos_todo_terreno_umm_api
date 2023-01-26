<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ParticipanteResource extends JsonResource
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
            'nome' => $this->nome,
            'email' => $this->email,
            'pergunta_participante_1' => $this->pergunta_participante_1,
            'resposta_participante_1' => $this->resposta_participante_1,
            'pergunta_participante_2' => $this->pergunta_participante_2,
            'resposta_participante_2' => $this->resposta_participante_2,
            'local_residencia' => $this->local_residencia,
            'password' => $this->password
        ];
    }
}
