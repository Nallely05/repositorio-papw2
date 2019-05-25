<?php

namespace App\Http\Controllers;
use App\modelObra;
use App\modelCapitulo;
use App\modelSeguir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VistasController extends Controller
{
    public function landingpage()
    {
        return view('landingpage');
    }

    public function perfilView()
    {
       
    }

    public function crearCuentaView()
    {
        return view('CrearCuenta');
    }

    public function dashboardView()
    {
        $dbActualizaciones=DB::table('vDashboard')->select()->orderBy('created_at','desc')->get();
        
        $actualizaciones=array();
        foreach($dbActualizaciones as $actu)
        {
            $mAct=new modelObra();
            $mAct->setImgPortadaObra($actu->imgPortadaObra);
            $mAct->setIdObra($actu->idObra);
            $mAct->setIdUsuario($actu->idUsuario);
            $mAct->setIdGenero($actu->idGenero);
            $mAct->setIdCategoria($actu->idCategoria);
            $mAct->setIdAudiencia($actu->idAudiencia);
            $mAct->setIdAdvertencia($actu->idAdvertencia);
            $mAct->setTituloObra($actu->tituloObra);
            $mAct->setDescripcionObra($actu->descripcionObra);
            $mAct->setCreated_at($actu->created_at);
            $mAct->setUpdateded_at($actu->updated_at);

            //vDashboard
            $mAct->setNombreGenero($actu->nombreGenero);
            $mAct->setNombreCategoria($actu->nombreCategoria);
            $mAct->setNombreAudiencia($actu->nombreAudiencia);
            $mAct->setNombreAdvertencia($actu->nombreAdvertencia);
            $mAct->setAntiguedad($actu->antiguedad);
            $mAct->setNombrePublicando($actu->name);

            array_push($actualizaciones,$mAct);
        }

        //echo $actualizaciones[0]->tituloObra;
        //echo var_dump($actualizaciones);
        $dbMismoGenero=DB::table('vDashboard')->select()->get();
        $mismoGenero=array();
        foreach($dbMismoGenero as $mismoG)
        {
            $mAct=new modelObra();
            $mAct->setImgPortadaObra($mismoG->imgPortadaObra);
            $mAct->setIdObra($mismoG->idObra);
            $mAct->setIdUsuario($mismoG->idUsuario);
            $mAct->setIdGenero($mismoG->idGenero);
            $mAct->setIdCategoria($mismoG->idCategoria);
            $mAct->setIdAudiencia($mismoG->idAudiencia);
            $mAct->setIdAdvertencia($mismoG->idAdvertencia);
            $mAct->setTituloObra($mismoG->tituloObra);
            $mAct->setDescripcionObra($mismoG->descripcionObra);
            $mAct->setCreated_at($mismoG->created_at);
            $mAct->setUpdateded_at($mismoG->updated_at);

             //vDashboard
             $mAct->setNombreGenero($mismoG->nombreGenero);
             $mAct->setNombreCategoria($mismoG->nombreCategoria);
             $mAct->setNombreAudiencia($mismoG->nombreAudiencia);
             $mAct->setNombreAdvertencia($mismoG->nombreAdvertencia);
             $mAct->setAntiguedad($mismoG->antiguedad);
             $mAct->setNombrePublicando($mismoG->name);

            array_push($mismoGenero,$mAct);
        }

        return view('dashboard')->with('Actualizaciones',$actualizaciones)
        ->with('MismoGenero',$mismoGenero);
    }

    public function escribirCapView(Request $request)
    {
        if($request->id)
        {
            return view('EscribirCap')->with('idObra',$request->id);
        }
    }
    public function lecturaView(Request $request)
    {
        if($request->idObra)
        {
            $idObra=$request->idObra;

            $dbCapituloAleer=DB::table('tbl_capitulo')->select()->where('idObra',$idObra)->first();
            if($dbCapituloAleer)
            {
                $mCap=new modelCapitulo();
                $mCap->setIdCapitulo($dbCapituloAleer->idCapitulo);
                $mCap->setIdObra($dbCapituloAleer->idObra);
                $mCap->setTituloCapitulo($dbCapituloAleer->tituloCapitulo);
                $mCap->setImagenCapitulo($dbCapituloAleer->imagenCapitulo);
                $mCap->setContenidoCapitulo($dbCapituloAleer->contenidoCapitulo);
                $mCap->setCreated_at($dbCapituloAleer->created_at);
                $mCap->setUpdateded_at($dbCapituloAleer->updated_at);

                return view('lectura')->with('capituloAleer',$mCap); 
            }
            else
            {
                return redirect('perfil');
            }
        }
        else
        {
           return redirect('perfil');
        }
    }

    public function politicaView()
    {
        return view('politica');
    }

    public function buscarView(Request $request)
    {

        return view('Buscar');/*Resultados*/
    }

    public function sesionView()
    {
        return view('sesion');
    }
    public function sobreNosotrosView()
    {
        return view('SobreNosotros');
    }

    public function seguir(Request $request)
    {
        if($request->idUsuarioSiguiendo)
        {
            $idUsuarioLog=\Auth::user();
            $mSeguir= new modelSeguir();
            $sigue= DB::table('tbl_seguir')->select()
                   ->where('idUsuarioSeguidor',$idUsuarioLog->id)
                   ->where('idUsuarioSeguido',$request->idUsuarioSiguiendo)
                   ->first();
                   if($sigue)
                   {
                       //$mSeguir->setIdSeguir($sigue->idSeguir);
                       DB::table('tbl_seguir')
                       ->where('idSeguir',$sigue->idSeguir)
                       ->where('idUsuarioSeguidor',$idUsuarioLog->id)
                       ->where('idUsuarioSeguido',$request->idUsuarioSiguiendo)
                       ->delete();

                    return back();
                   }
                   else
                   {
                    DB::table('tbl_seguir')->insert(
                        array(
                            'idUsuarioSeguidor'=>$idUsuarioLog->id,
                            'idUsuarioSeguido'=>$request->idUsuarioSiguiendo
                        )
                    );
                    return back();
                   }
        }
      
    }

    public function getSeguir($id)
    {
        $idUsuarioLog=\Auth::user();
        $sigue= DB::table('tbl_seguir')->select()
                   ->where('idUsuarioSeguidor',$idUsuarioLog->id)
                   ->where('idUsuarioSeguido',$id)
                   ->first();
        if($sigue)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    public function adminView()
    {
        return view('admin');
    }
}
