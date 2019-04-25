<?php

use Illuminate\Database\Seeder;

class categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Anime/Manga'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Comic'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Literatura'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Caricatura'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Pelicula'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Serie/TV'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Vídeojuego'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Música'));
        DB::table('tbl_categoria')->insert(array('nombreCategoria' =>'Originales'));
    }
}
