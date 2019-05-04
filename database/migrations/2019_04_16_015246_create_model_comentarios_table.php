<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comentario', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->integer('idCapitulo')->unsigned();
            $table->foreign('idCapitulo','fk_capitulo')->references('idObra')->on('tbl_capitulo');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario','fk_usuarioC')->references('id')->on('users');
            $table->string('comentario',255);
            $table->boolean('estado');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_comentario');
    }
}
