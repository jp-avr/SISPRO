<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessoCidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processo_cids', function (Blueprint $table) {
            $table->id('processo_cid_id');
            $table->foreignId('processo_id')->references('processo_id')->on('processos')->onDelete('cascade');
            $table->foreignId('cid_id')->references('cid_id')->on('cids');
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
        Schema::dropIfExists('processo_cids');
    }
}
