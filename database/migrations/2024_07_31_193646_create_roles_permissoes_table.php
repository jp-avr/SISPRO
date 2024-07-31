<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissoes', function (Blueprint $table) {
            $table->id('role_permissao_id');
            $table->foreignId('role_id')->references('role_id')->on('roles');
            $table->foreignId('permissao_id')->references('permissao_id')->on('permissoes');
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
        Schema::dropIfExists('roles_permissoes');
    }
}
