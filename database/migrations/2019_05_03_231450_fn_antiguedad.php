<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FnAntiguedad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("DROP FUNCTION IF EXISTS fnObtenerAntiguedad;");
        DB::unprepared("
            create function fnObtenerAntiguedad(fecha timestamp)
            returns text 
            deterministic
            begin
                declare antiguedad text;
                set antiguedad = (select 
                (
                    case 
                        when (TIMESTAMPDIFF(second,fecha,now())) < 60 
                            then 'hace un momento' 
                        when (TIMESTAMPDIFF(minute,fecha, now())) < 60 
                            then concat('hace ',TIMESTAMPDIFF(minute,fecha,now()),' minuto(s)')
                        when (TIMESTAMPDIFF(hour,fecha,now())) < 24
                            then concat('hace ',TIMESTAMPDIFF(hour,fecha,now()),' hora(s)')
                        when (TIMESTAMPDIFF(day,fecha,now())) >= 1 
                            then concat('hace ',TIMESTAMPDIFF(day,fecha,now()),' dia(s)')
                        else 'Informacion incorrecta' 
                    end
                )as data);
                return antiguedad;
            end
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP FUNCTION IF EXISTS fnObtenerAntiguedad;");
    }
}
