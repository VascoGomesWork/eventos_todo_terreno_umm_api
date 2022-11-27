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
        Schema::create('participante', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            $table->string('nome', 500);
            $table->string('email', 900);
            $table->string('telefone', 9)->nullable();
            $table->string('local_residencia', 1000)->nullable();
            $table->string('password', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante');
    }
};
