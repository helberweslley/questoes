<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao_materias', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('materia_id');
            $table->foreign('materia_id')->references('id')->on('materia');

            $table->unsignedBigInteger('questao_id');
            $table->foreign('questao_id')->references('id')->on('questao');

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
        Schema::dropIfExists('questao_materias');
    }
}
