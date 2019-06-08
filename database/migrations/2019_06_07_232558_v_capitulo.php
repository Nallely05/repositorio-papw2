<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VCapitulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('drop view if exists vCapitulo;');
        DB::statement('
        Create view vCapitulo
        as
        SELECT 
        cap.idCapitulo, cap.tituloCapitulo, cap.imagenCapitulo, cap.contenidoCapitulo, cap.created_at, cap.updated_at,fnObtenerAntiguedad(cap.created_at) as antiguedad,
        obr.idObra, obr.tituloObra, uss.id, uss.name
        FROM tbl_capitulo as cap inner join tbl_obra as obr on cap.idObra = obr.idObra 
        inner join users as uss on uss.id = obr.idUsuario;
        ');
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('drop view if exists vCapitulo;');
    }
}
