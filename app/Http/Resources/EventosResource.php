<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventosResource extends JsonResource
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
            'imagem' => $this->imagem,
            'localidade_inicio' => $this->localidade_inicio,
            'pergunta_evento' => $this->pergunta_evento,
            'resposta_evento' => $this->resposta_evento,
            'localidade_fim' => $this->localidade_fim,
            'requisitos' => $this->requisitos,
            'descricao' => $this->descricao,
            'id_organizador_fk' => $this->id_organizador_fk
        ];
    }
}
