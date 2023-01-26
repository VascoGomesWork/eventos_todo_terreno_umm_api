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
            $table->string('resposta_evento_1', 1000);
            $table->string('resposta_evento_2', 1000);
            $table->string('resposta_evento_3', 1000);
            $table->string('resposta_participante_1', 1000);
            $table->string('resposta_participante_2', 1000);
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
