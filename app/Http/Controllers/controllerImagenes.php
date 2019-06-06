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
            $dirImg=DB::table('user')->select('imagenPerfil')->where("id",$request->id)->first();
            $response = response()->make(Storage::get($dirImg->imagenPerfil),200);
            $response->header('Content-Type','image/png');
            return $response;
        }
    }

    public function getImgPortada(Request $request)
    {
        if($request->id)
        {
            $id= $request->id;
            $dirImg=DB::table('user')->select('imagenPortada')->where("id",$request->id)->first();
            $response = response()->make(Storage::get($dirImg->imagenPortada),200);
            $response->header('Content-Type','image/png');
            return $response;
        }
    }
}
