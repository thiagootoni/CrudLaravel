<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableExames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('teste_id')->nullable();
            $table->foreign('teste_id')
            ->references('id')
            ->on('testes')
            ->onDelete('set null');

            $table->unsignedBigInteger('user_resposta_id')->nullable();
            $table->foreign('user_resposta_id')
            ->references('id')
            ->on('users')
            ->onDelete('set null');

            $table->string('notaFinal');
            $table->boolean('foiAprovado')->default(false);
            $table->boolean('foiRealizado')->default(false);
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
        Schema::dropIfExists('exames');
    }
}
