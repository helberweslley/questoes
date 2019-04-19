<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QuestaoGabarito extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gabarito', function($table)
        {
            $table->unsignedBigInteger('alternativa_id');
            $table->foreign('alternativa_id')->references('id')->on('alternativa');
        });

        Schema::table('questao', function($table)
        {
            $table->unsignedBigInteger('gabarito_id');
            $table->foreign('gabarito_id')->references('id')->on('gabarito');
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
