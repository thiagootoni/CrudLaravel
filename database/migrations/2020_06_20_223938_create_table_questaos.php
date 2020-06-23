<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enunciado');
            $table->string('respostaA');
            $table->string('respostaB');
            $table->string('respostaC');
            $table->string('respostaD');
            $table->string('respostaE');
            $table->string('respostaCorreta');
            $table->string('valorDaQuestao');

            $table->unsignedBigInteger('teste_id');
            $table->foreign('teste_id')
            ->references('id')
            ->on('testes')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questaos');
    }
}
