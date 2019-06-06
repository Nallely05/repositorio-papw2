<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class controllerImagenes extends Controller
{
    public function getImgObra(Request $request)
    {
        if($request->id)
        {
            $id= $request->id;
            $dirImg=DB::table('tbl_obra')->select('imgPortadaObra')->where('idObra',$id)->first();
            $response = response()->make(Storage::get($dirImg->imgPortadaObra),200);
            $response->header('Content-Type','image/png');
            return $response;

        }
    }

    public function getImgPortadaCap(Request $request)
    {
        if($request->id)
        {
            $id= $request->id;
            $dirImg=DB::table('tbl_capitulo')->select('imagenCapitulo')->where('idCapitulo',$id)->first();
            $response = response()->make(Storage::get($dirImg->imagenCapitulo),200);
            $response->header('Content-Type','image/png');
            return $response;
        }
    }

    public function getImgPerfil(Request $request)
    {
        if($request->id)
        {
            $id= $request->id;
            $dirImg=DB::table('users')->select('imagenPerfil')->where("id",$request->id)->first();
            $response = response()->make(Storage::get($dirImg->imagenPerfil),200);
            $response->header('Content-Type','image/png');
            return $response;
        }
    }

    public function postImgPerfil(Request $request)
    {

        $LecturaImg=$request->file("fotoPerfilIMG");
        if($LecturaImg)
        {
            $userinfo = \Auth::user();

            $pathObra="public/usuarios/".\Auth::user()->id."/fotoPerfil";
             Storage::makeDirectory($pathObra);
            $nombrePortada=substr($LecturaImg->getClientOriginalName(),-5);
            $varPathPortada=$pathObra."/".$nombrePortada;
            Storage::putFileAs($pathObra,$LecturaImg,$nombrePortada);
            
            DB::table('users')->where("id",$userinfo->id)->update([
            'imagenPerfil'=> $varPathPortada
        ]);
            
        }
        return redirect('perfil');
        
    }

    public function getImgPortada(Request $request)
    {
        if($request->id)
        {
            $id= $request->id;
            $dirImg=DB::table('users')->select('imagenPortada')->where("id",$request->id)->first();
            $response = response()->make(Storage::get($dirImg->imagenPortada),200);
            $response->header('Content-Type','image/png');
            return $response;
        }
    }

    public function postImgPortada(Request $request)
    {
        
        $LecturaImg=$request->file("cambiarFotoPortada");
        if($LecturaImg)
        {
            $userinfo = \Auth::user();

            $pathObra="public/usuarios/".\Auth::user()->id."/portadaPerfil";
             Storage::makeDirectory($pathObra);
            $nombrePortada=substr($LecturaImg->getClientOriginalName(),-5);
            $varPathPortada=$pathObra."/".$nombrePortada;
            Storage::putFileAs($pathObra,$LecturaImg,$nombrePortada);
            
            DB::table('users')->where("id",$userinfo->id)->update([
            'imagenPortada'=> $varPathPortada
        ]);
            
        }
        return redirect('perfil');
    }
}

