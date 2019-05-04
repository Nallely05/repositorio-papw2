<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\modelCapitulo;

class controllerCapitulo extends Controller
{
    public function index()
    {
        //
        
    }
   
    public function store(Request $request)
    {

        $idUsuarioPublicando=\Auth::user();

        $var= new modelCapitulo();
        $var->setTituloCapitulo($request->input('tituloCapitulo'));
        //$var->setImagenCapitulo($request->photo->store('imagenCapitulo'));
        $var->setContenidoCapitulo($request->input('contenidoCap'));
        $var->setIdObra($request->input('idObraPerteneciente'));
      
        $pathCapitulo="public/usuarios/".$idUsuarioPublicando->id."/Portadas"."/".time();
        Storage::makeDirectory($pathCapitulo);

        $LecturaImg=$request->file("PortadaCap");
        if($LecturaImg)
        {
            $nombrePortada=time()."-".substr($LecturaImg->getClientOriginalName(),-5);
            $var->setImagenCapitulo($pathCapitulo."/".$nombrePortada);
            Storage::putFileAs($pathCapitulo,$LecturaImg,$nombrePortada);
        }


        DB::table('tbl_capitulo')->insert(array(
            'tituloCapitulo'=> $var->getTituloCapitulo(),
            'imagenCapitulo'=> $var->getImagenCapitulo(),
            'contenidoCapitulo'=>$var->getContenidoCapitulo(),
            'idObra'=>$var->getIdObra()
        ));
       
        $id=DB::getPdo()->lastInsertId();


        return redirect('lectura?idCap='.$id.'&idObra='.$var->getIdObra());
       //return var_dump($var);
    }
    public function create()
    {
        //Se encuentra en VistasController
        //return view('EscribirCap')->with('idObraPerteneciente',$request->id);
        
    }

    public function show($id)
    {
        
    }

}
