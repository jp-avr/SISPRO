<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcJudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proc_jud', function (Blueprint $table) {
            $table->id('proc_jud_id');
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('cid_id')->constrained('cids');
            $table->string('proc_jud_numero_proc');
            $table->string('proc_jud_numero_req');
            $table->date('proc_jud_data_exame');
            $table->date('proc_jud_data_ini_doenca');
            $table->date('proc_jud_data_ini_incapacidade');
            $table->string('proc_jud_nome_perito');
            $table->integer('proc_jud_cod_perito')->nullable();
            $table->string('proc_jud_resultado');
            $table->string('proc_jud_historia');
            $table->string('proc_jud_exame_fisico');
            $table->string('proc_jud_consideracoes')->nullable();
            $table->boolean('proc_jud_ativo')->default(1);
            $table->string('proc_jud_parte_atingida');            
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
        Schema::dropIfExists('proc_jud');
    }
}
