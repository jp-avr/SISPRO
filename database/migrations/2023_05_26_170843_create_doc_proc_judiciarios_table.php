<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocProcJudiciariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_proc_judiciarios', function (Blueprint $table) {
            $table->id('doc_proc_judiciarios_id');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->foreignId('proc_judiciarios_id')->constrained('proc_judiciarios');
            $table->string('doc_proc_judiciarios_nome');
            $table->boolean('doc_proc_judiciarios_ativo')->default(1);
            $table->string('doc_proc_judiciarios_documento');
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
        Schema::dropIfExists('doc_proc_judiciarios');
    }
}
