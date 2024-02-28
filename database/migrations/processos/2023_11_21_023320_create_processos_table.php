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
            $table->foreignId('cliente_id')->references('cliente_id')->on('clientes');
            $table->foreignId('tipo_processo_id')->references('tipo_processo_id')->on('tipo_processos');
            $table->foreignId('cid_id')->constrained('cids');
            $table->string('proc_numero_proc');
            // $table->string('proc_numero_req');
            // $table->date('proc_data_exame');
            $table->date('proc_data_ini_doenca');
            $table->date('proc_data_ini_incapacidade');
            // $table->string('proc_nome_perito');
            // $table->string('proc_cid');
            $table->integer('proc_cod_perito')->nullable();
            $table->string('proc_resultado');
            $table->string('proc_historia');
            $table->string('proc_exame_fisico');
            $table->string('proc_consideracoes')->nullable();
            $table->boolean('proc_ativo')->default(1);
            $table->string('proc_parte_atingida');            
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
