<?php

use Illuminate\Database\Seeder;

class advertencia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Spoilers'));
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Tortura'));
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Incesto'));
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Violación'));
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Muerte de un personaje'));
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Lenguaje inapropiado'));
        DB::table('tbl_advertencia')->insert(array('nombreAdvertencia' =>'Ninguna'));
    }
}
