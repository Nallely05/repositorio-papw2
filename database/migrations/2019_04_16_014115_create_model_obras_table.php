<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_obra', function (Blueprint $table) {
            $table->increments('idObra');
            $table->integer('idUsuario')->unsigned();
            $table->text('imgPortadaObra');
            $table->integer('idGenero')->unsigned();
            $table->integer('idCategoria')->unsigned();
            $table->integer('idAudiencia')->unsigned();
            $table->integer('idAdvertencia')->unsigned();
            $table->string('tituloObra', 50);
            $table->string('descripcionObra', 255);
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
        Schema::dropIfExists('tbl_obra');
    }
}
