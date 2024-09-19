<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->id('processo_id');
            $table->foreignId('cliente_id')->references('cliente_id')->on('clientes')->onDelete('cascade');
            $table->foreignId('tipo_processo_id')->references('tipo_processo_id')->on('tipo_processos');
            $table->foreignId('parte_atingida_id')->references('parte_atingida_id')->on('partes_atingidas');
            $table->string('proc_numero_proc')->unique();
            $table->date('proc_data_ini_doenca');
            $table->date('proc_data_ini_incapacidade');
            $table->integer('proc_cod_perito')->nullable();
            $table->string('proc_resultado')->nullable();
            $table->text('proc_historia');
            $table->text('proc_consideracoes')->nullable();
            $table->boolean('proc_ativo')->default(0);
            $table->boolean('proc_finalizado')->default(0);
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
        Schema::dropIfExists('processos');
    }
}
