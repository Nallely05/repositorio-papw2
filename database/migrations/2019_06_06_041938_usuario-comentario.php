<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuarioComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('drop view if exists vComentario;');
        DB::statement('
        Create view vComentario
        as
        SELECT com.idComentario, com.comentario, com.idUsuario, com.idCapitulo, com.estado, com.created_at, com.updated_at, usr.name, 
        fnObtenerAntiguedad(com.created_at) as antiguedad FROM tbl_comentario as com inner join users as usr on 
        com.idUsuario = usr.id;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
        DB::statement('drop view if exists vComentario;');
    }
}

