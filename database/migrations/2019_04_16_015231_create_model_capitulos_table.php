<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelCapitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_capitulo', function (Blueprint $table) {
            $table->increments('idCapitulo');
            $table->integer('idObra')->unsigned();
            $table->foreign('idObra','fk_obra')->references('idObra')->on('tbl_obra');
            $table->string('tituloCapitulo',50);
            $table->string('imagenCapitulo',1000);
            $table->text('contenidoCapitulo');
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
        Schema::dropIfExists('tbl_capitulo');
    }
}
