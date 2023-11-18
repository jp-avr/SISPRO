<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocProcadministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_proc_administrativos', function (Blueprint $table) {
            $table->id('doc_proc_adm_id');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->string('proc_adm_id')->constrained('proc_administrativos');
            $table->string('doc_proc_adm_nome');
            $table->string('doc_proc_adm_ativo')->default(1);
            $table->string('doc_proc_adm_documento');
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
        Schema::dropIfExists('doc_proc_adm');
    }
}
