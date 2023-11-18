<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_clientes', function (Blueprint $table) {
            $table->id('doc_clientes_id');
            $table->foreignId('clientes_id')->constrained('clientes');
            $table->string('doc_clientes_nome');
            $table->boolean('doc_clientes_ativo')->default(1);
            $table->string('doc_clientes_documento');
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
        Schema::dropIfExists('doc_clientes');
    }
}
