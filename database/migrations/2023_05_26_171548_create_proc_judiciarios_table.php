<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcJudiciariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_judiciarios', function (Blueprint $table) {
            $table->id('proc_judiciarios_id');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->foreignId('cid_id')->constrained('cids');
            $table->string('proc_judiciarios_numero_proc');
            $table->string('proc_judiciarios_numero_req');
            $table->date('proc_judiciarios_data_exame');
            $table->date('proc_judiciarios_data_ini_doenca');
            $table->date('proc_judiciarios_data_ini_incapacidade');
            $table->string('proc_judiciarios_nome_perito');
            $table->integer('proc_judiciarios_cod_perito')->nullable();
            $table->string('proc_judiciarios_resultado');
            $table->string('proc_judiciarios_historia');
            $table->string('proc_judiciarios_exame_fisico');
            $table->string('proc_judiciarios_consideracoes');
            $table->boolean('proc_judiciarios_ativo')->default(1);
            $table->string('proc_judiciarios_parte_atingida');            
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
        Schema::dropIfExists('proc_judiciarios');
    }
}
