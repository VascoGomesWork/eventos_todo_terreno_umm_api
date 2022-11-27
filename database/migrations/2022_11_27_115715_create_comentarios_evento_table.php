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
        Schema::create('comentarios_eventos', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('comentario', 1000);
            $table->integer('id_evento_fk');
            $table->integer('id_participante_fk');
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
        Schema::dropIfExists('comentarios_eventos');
    }
};
