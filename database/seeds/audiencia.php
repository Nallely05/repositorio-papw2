<?php

use Illuminate\Database\Seeder;

class audiencia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_audiencia')->insert(array('nombreAudiencia' =>'Todo público'));
        DB::table('tbl_audiencia')->insert(array('nombreAudiencia' =>'Mayores de 13'));
        DB::table('tbl_audiencia')->insert(array('nombreAudiencia' =>'Mayores de 18'));
        //php artisan db:seed --class=audiencia
    }
}
