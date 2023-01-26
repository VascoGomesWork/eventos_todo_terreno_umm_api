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
            'data_inicio' => $this->data_inicio,
            'data_fim' => $this->data_fim,
            'localidade_inicio' => $this->localidade_inicio,
            'pergunta_evento_1' => $this->pergunta_evento_1,
            'pergunta_evento_2' => $this->pergunta_evento_2,
            'pergunta_evento_3' => $this->pergunta_evento_3,
            'pergunta_participante_1' => $this->pergunta_participante_1,
            'pergunta_participante_2' => $this->pergunta_participante_2,
            'localidade_fim' => $this->localidade_fim,
            'requisitos' => $this->requisitos,
            'descricao' => $this->descricao,
            'id_organizador_fk' => $this->id_organizador_fk
        ];
    }
}
