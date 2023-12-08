<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cliente_id');
            $table->foreignId('ocupacao_id')->constrained('ocupacao');
            $table->string('cliente_nome');
            $table->string('cliente_cpf')->unique()->nullable();
            $table->string('cliente_rg')->unique()->nullable();
            $table->string('cliente_data_nascimento')->unique()->nullable();
            $table->string('cliente_telefone')->nullable();
            $table->string('cliente_email')->nullable();
            $table->string('cliente_sexo');
            $table->string('cliente_estado_civil');
            $table->boolean('cliente_ativo')->default(1);
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
        Schema::dropIfExists('clientes');
    }
}
