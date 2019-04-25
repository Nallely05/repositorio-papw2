<?php

use Illuminate\Database\Seeder;

class genero extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_genero')->insert(array('nombreGenero' =>'Drama'));
        DB::table('tbl_genero')->insert(array('nombreGenero' =>'Humor/Parodia'));
        DB::table('tbl_genero')->insert(array('nombreGenero' =>'Romance'));
        DB::table('tbl_genero')->insert(array('nombreGenero' =>'Horror'));
        DB::table('tbl_genero')->insert(array('nombreGenero' =>'Universo alternativo'));
        DB::table('tbl_genero')->insert(array('nombreGenero' =>'Ciencia ficción'));
    }
}
