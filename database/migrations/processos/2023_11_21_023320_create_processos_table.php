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
            $table->foreignId('parte_atingida_id')->references('parte_atingida_id')->on('partes_atingidas');
            // $table->foreignId('cid_id')->constrained('cids');  //Trocado por tabela pivot
            $table->string('proc_numero_proc');
            // $table->string('proc_numero_req');
            // $table->date('proc_data_exame');
            $table->date('proc_data_ini_doenca');
            $table->date('proc_data_ini_incapacidade');
            // $table->string('proc_nome_perito');
            // $table->string('proc_cid');
            $table->integer('proc_cod_perito')->nullable();
            $table->string('proc_resultado')->nullable();
            $table->string('proc_historia');
            // $table->string('proc_exame_fisico'); //Cliente pediu a remoção, não irá salvar laudos no sistema
            $table->string('proc_consideracoes')->nullable();
            $table->boolean('proc_ativo')->default(1);
            $table->boolean('proc_finalizado')->default(0);
            // $table->string('proc_parte_atingida'); //Virou chave estrangeira        
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
