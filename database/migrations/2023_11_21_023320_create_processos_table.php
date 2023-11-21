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
            $table->foreignId('proc_jud_id')->nullable()->references('proc_jud_id')->on('proc_jud');
            $table->foreignId('proc_adm_id')->nullable()->references('proc_adm_id')->on('proc_adm');
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
