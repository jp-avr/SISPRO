<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcAdmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_adm', function (Blueprint $table) {
            $table->id('proc_adm_id');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('cid_id')->constrained('cids');
            $table->string('proc_adm_numero_proc');
            $table->string('proc_adm_numero_req');
            $table->date('proc_adm_data_exame');
            $table->date('proc_adm_data_ini_doenca');
            $table->date('proc_adm_data_ini_incapacidade');
            $table->string('proc_adm_nome_perito');
            $table->integer('proc_adm_cod_perito')->nullable();
            $table->string('proc_adm_resultado');
            $table->string('proc_adm_historia');
            $table->string('proc_adm_exame_fisico');
            $table->string('proc_adm_consideracoes')->nullable();
            $table->boolean('proc_adm_ativo')->default(1);
            $table->string('proc_adm_parte_atingida');            
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
        Schema::dropIfExists('proc_adm');
    }
}
