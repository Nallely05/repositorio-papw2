<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VDashboardSeguir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('drop view if exists VDashboardSeguir;');
        DB::statement('
        Create view VDashboardSeguir
        as
        SELECT 
        dash.idObra, dash.imgPortadaObra, dash.idGenero,dash.nombreGenero, dash.idCategoria, dash.nombreCategoria, 
        dash.idAudiencia, dash.nombreAudiencia, dash.idAdvertencia, dash.nombreAdvertencia, dash.tituloObra, dash.descripcionObra, 
        dash.created_at,dash.updated_at,dash.idUsuario, dash.name,dash.antiguedad,seg.idUsuarioSeguido, seg.idUsuarioSeguidor
        FROM db_hispanofic.vDashboard as dash
        inner join tbl_seguir as seg on seg.idUsuarioSeguido= dash.idUsuario;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop view if exists VDashboardSeguir;');
    }
}
