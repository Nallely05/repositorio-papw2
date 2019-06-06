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

    public function perfilView() {}

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
                //return dd(\Auth::user()->name);
                return view('lectura')->with('capituloAleer',$mCap); 

                $Us=\Auth::user();
                $DatosUsuario=DB::table('users')->select()->where('id',$Us->id)->first();

                if($DatosUsuario)
                {
                    return view('lectura')
                    ->with('id',$Us->id)
                    ->with('nombreUsuario',$DatosUsuario->name)
                    ->with('Yo',true);
                }
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


        //Intento comentarios
/*
        $dbComentarios=DB::table('tbl_comentario')->select()->where('idCapitulo', $request->idCapitulo)->get();
        
        $comentarios=array();
        foreach($dbComentarios as $coment)
        {
            $mAct=new modelComentario();
            $mAct->setIdComentario($coment->idComentario);
            $mAct->setIdCapitulo($coment->idCapitulo);
            $mAct->setIdUsuario($coment->idUsuario);
            $mAct->setComentario($coment->comentario);
            $mAct->setEstado($coment->estado);
            $mAct->setCreated_at($coment->created_at);
           

            array_push($comentarios,$coment);
        }    */

    }

    public function insertarComentario(Request $request)
    {

        if($request->idCapitulo)
        {
            $usuario=\Auth::user();
            DB::table('tbl_comentario')->insert(["idCapitulo"=>$request->idCapitulo, "idUsuario"=>$usuario->id,
            "comentario"=>$request->comentario, "estado"=>1]);

            $id=DB::getPdo()->lastInsertId();
            if($id!=null)
            {
                return $id;
            
            }
            else{ return -1;}
        }
        return -1;
    }

    public function getListComentarios(Request $request)
    {
        $dbListaComentarios=null;
        if($request->idCapitulo)
        {
            $dbListaComentarios = DB::table('tbl_comentario')->select()
            ->where('idCapitulo', $request->idCapitulo)->orderBy("created_at","desc")
            ->get();
        }
        
        return response()->json($dbListaComentarios);
    }   


    public function politicaView()
    {
        return view('politica');
    }

    public function buscarView(Request $request)
    {
        $dbBusqueda = null;
        $Busqueda=array();
    
        if($request->catid!='-1')
        {
        $dbBusqueda=DB::table('vDashboard')->select()->where('idCategoria', 'LIKE', '%' .$request->catid. '%')->get();
        }
        else{
            if($request->catid1!='-1')
            {
            $dbBusqueda=DB::table('vDashboard')->select()->where('idAudiencia', 'LIKE', '%' .$request->catid1. '%')->get();
            }
            else{
                if($request->catid2!='-1')
                {
                $dbBusqueda=DB::table('vDashboard')->select()->where('idGenero', 'LIKE', '%' .$request->catid2. '%')->get();
                }
                else{
                    if($request->catid3!='-1')
                    {
                    $dbBusqueda=DB::table('vDashboard')->select()->where('idAdvertencia', 'LIKE', '%' .$request->catid3. '%')->get();
                    }
                }
            } 
        }
        if($request->inputBuscarPorTitulo)
        {
            $dbBusqueda=DB::table('vDashboard')->select()->where('tituloObra', 'LIKE', '%' .$request->inputBuscarPorTitulo. '%')->orWhere('descripcionObra', 'LIKE', '%' .$request->inputBuscarPorTitulo. '%')->get();
        }
        if($dbBusqueda!=null)
        {
            foreach($dbBusqueda as $Bus)
            {
                $mBus=new modelObra();
                $mBus->setImgPortadaObra($Bus->imgPortadaObra);
                $mBus->setIdObra($Bus->idObra);
                $mBus->setIdUsuario($Bus->idUsuario);
                $mBus->setIdGenero($Bus->idGenero);
                $mBus->setIdCategoria($Bus->idCategoria);
                $mBus->setIdAudiencia($Bus->idAudiencia);
                $mBus->setIdAdvertencia($Bus->idAdvertencia);
                $mBus->setTituloObra($Bus->tituloObra);
                $mBus->setDescripcionObra($Bus->descripcionObra);
                $mBus->setCreated_at($Bus->created_at);
                $mBus->setUpdateded_at($Bus->updated_at);

                //vDashboard
                $mBus->setNombreGenero($Bus->nombreGenero);
                $mBus->setNombreCategoria($Bus->nombreCategoria);
                $mBus->setNombreAudiencia($Bus->nombreAudiencia);
                $mBus->setNombreAdvertencia($Bus->nombreAdvertencia);
                $mBus->setAntiguedad($Bus->antiguedad);
                $mBus->setNombrePublicando($Bus->name);

                array_push($Busqueda,$mBus);
        }

        }
        
        return view('Buscar')->with('dbBusqueda',$Busqueda);/*Resultados*/
    }

    public function sesionView()
    {
        return view('sesion');
    }
    public function sobreNosotrosView()
    {
        return view('SobreNosotros');
    }
    public function getListSiguiendo(Request $request)
    {
        $dbListaSeguir;
        if($request->id)
        {
            $dbListaSeguir = DB::table('tbl_seguir')->select()
            ->where('idUsuarioSeguidor', $request->id)
            ->get();
        }
        
        return response()->json($dbListaSeguir);
    }
    public function getListCaps(Request $request)
    {
        $dbListaCaps=null;
        if($request->idObra){
        $dbListaCaps = DB::table('tbl_capitulo')->select()
        ->where('idObra', $request->idObra)
        ->get();
        }
       
        return response()->json($dbListaCaps);
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
        if($idUsuarioLog)
        {
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
        return false;
        
        
    }
    public function adminView()
    {
        return view('admin');
    }
}
