<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestaoTipoRelacionamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questao', function($table) {
            $table->unsignedBigInteger('questao_tipo_id')->nullable()->withDefault(null);
            $table->foreign('questao_tipo_id')->references('id')->on('questao_tipo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
