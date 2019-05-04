<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VDashboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        DB::statement('
        Create view vDashboard
        as
        select 
        obr.idObra,obr.imgPortadaObra,obr.idGenero,gen.nombreGenero, obr.idCategoria,cat.nombreCategoria, obr.idAudiencia, aud.nombreAudiencia, obr.idAdvertencia, adv.nombreAdvertencia,
        obr.tituloObra,obr.descripcionObra, 
        obr.created_at, 
        obr.updated_at, obr.idUsuario, uss.name,
        fnObtenerAntiguedad(obr.created_at) as antiguedad
        from tbl_obra as obr
        inner join users as uss on obr.idUsuario=uss.id
        inner join tbl_genero as gen on obr.idGenero=gen.idGenero
        inner join tbl_advertencia as adv on obr.idAdvertencia=adv.idAdvertencia
        inner join tbl_audiencia as aud on obr.idAudiencia=aud.idAudiencia
        inner join tbl_categoria as cat on obr.idCategoria=cat.idCategoria;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop view if exists vDashboard;');
    }
}
