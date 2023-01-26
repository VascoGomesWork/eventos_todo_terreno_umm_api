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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('nome', 500);
            $table->string('imagem', 900);
            $table->string('data_inicio', 500);
            $table->string('data_fim', 500);
            $table->string('localidade_inicio', 500);
            $table->string('pergunta_evento', 1000);
            $table->string('resposta_evento', 1000)->nullable();
            $table->string('localidade_fim', 500);
            $table->string('requisitos', 500);
            $table->string('descricao', 900);
            $table->integer('id_organizador_fk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
};
