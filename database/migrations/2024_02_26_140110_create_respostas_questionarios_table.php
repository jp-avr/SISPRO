<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasQuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respostas_questionarios', function (Blueprint $table) {
            $table->id('respostas_id');
            $table->foreignId('questionario_id')->references('questionario_id')->on('questionarios');
            $table->string('secao_1');
            $table->string('secao_2');
            $table->string('secao_3');
            $table->string('secao_4');
            $table->string('secao_5');
            $table->string('secao_6');
            $table->string('secao_7');
            $table->string('secao_8');
            $table->string('secao_9');
            $table->string('secao_10');
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
        Schema::dropIfExists('respostas_questionarios');
    }
}
