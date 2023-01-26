<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante_inscreve_eventos', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('pergunta_inscricao_evento_1', 1000);
            $table->string('resposta_inscricao_evento_1', 1000)->nullable();
            $table->string('pergunta_inscricao_evento_2', 1000);
            $table->string('resposta_inscricao_evento_2', 1000)->nullable();
            $table->integer('num_acompanhantes');
            $table->integer('id_participante_fk');
            $table->integer('id_evento_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante_inscreve_eventos');
    }
};
