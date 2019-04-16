<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelSeguirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_seguir', function (Blueprint $table) {
            $table->increments('idSeguir');
            $table->integer('idUsuarioSeguidor')->unsigned();
            $table->foreign('idUsuarioSeguidor','fk_seguidor')->references('id')->on('users');
            $table->integer('idUsuarioSeguido')->unsigned();
            $table->foreign('idUsuarioSeguido','fk_seguido')->references('id')->on('users');
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
        Schema::dropIfExists('tbl_seguir');
    }
}
