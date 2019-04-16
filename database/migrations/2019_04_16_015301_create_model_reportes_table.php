<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reporte', function (Blueprint $table) {
            $table->increments('idReporte');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario','fk_usuarioR')->references('id')->on('users');
            $table->integer('idComentario')->unsigned();
            $table->foreign('idComentario','fk_Comentario')->references('idComentario')->on('tbl_comentario');
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
        Schema::dropIfExists('tbl_reporte');
    }
}
