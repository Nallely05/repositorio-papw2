<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\modelObra;

class controllerObra extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $var= new modelObra();
        $var->setTituloObra($request->input('tituloObra'));
        //$var->setImgPortadaObra($request->photo->store('portadaObra'));
        $var->setDescripcionObra($request->input('descripcionObra'));
        $var->setIdCategoria($request->input('Categoria'));
        $var->setIdAudiencia($request->input('Audiencia'));
        $var->setIdGenero($request->input('Genero'));
        $var->setIdAdvertencia($request->input('Advertencia'));
        $var->setIdUsuario($request->input('idUsuarioPerfil'));


        DB::table('tbl_obra')->insert(array(
            'tituloObra'=> $var->getTituloObra(),
            'imgPortadaObra'=>'zxx',
            'descripcionObra'=>$var->getDescripcionObra(),
            'idCategoria'=>$var->getIdCategoria(),
            'idAudiencia'=>$var->getIdAudiencia(),
            'idGenero'=>$var->getIdGenero(),
            'idAdvertencia'=>$var->getIdAdvertencia(),
            'idUsuario'=>$var->getIdUsuario()
        ));
        return view('perfil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
