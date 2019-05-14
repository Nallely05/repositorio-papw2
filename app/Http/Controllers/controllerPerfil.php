<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\modelObra;

class controllerPerfil extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Us=\Auth::user();
        $dbObrasPublicadas=DB::table('vDashboard')->select()->orderBy('created_at','desc')->where('idUsuario',$Us->id)->get();
        
        $ObrasPublicadas=array();
        foreach($dbObrasPublicadas as $obrasP)
        {
            $mObra=new modelObra();
            $mObra->setImgPortadaObra($obrasP->imgPortadaObra);
            $mObra->setIdObra($obrasP->idObra);
            $mObra->setIdUsuario($obrasP->idUsuario);
            $mObra->setIdGenero($obrasP->idGenero);
            $mObra->setIdCategoria($obrasP->idCategoria);
            $mObra->setIdAudiencia($obrasP->idAudiencia);
            $mObra->setIdAdvertencia($obrasP->idAdvertencia);
            $mObra->setTituloObra($obrasP->tituloObra);
            $mObra->setDescripcionObra($obrasP->descripcionObra);
            $mObra->setCreated_at($obrasP->created_at);
            $mObra->setUpdateded_at($obrasP->updated_at);

             //vDashboard
             $mObra->setNombreGenero($obrasP->nombreGenero);
             $mObra->setNombreCategoria($obrasP->nombreCategoria);
             $mObra->setNombreAudiencia($obrasP->nombreAudiencia);
             $mObra->setNombreAdvertencia($obrasP->nombreAdvertencia);
             $mObra->setAntiguedad($obrasP->antiguedad);
             $mObra->setNombrePublicando($obrasP->name);

            array_push($ObrasPublicadas,$mObra);
        }
        //echo var_dump(count($ObrasPublicadas));
       
        $DatosUsuario=DB::table('users')->select()->where('id',$Us->id)->first();

        if($DatosUsuario)
        {
            if($ObrasPublicadas)
            {
            return view('perfil')->with('ObrasPublicadas',$ObrasPublicadas)
            ->with('id',$Us->id)
            ->with('nombreUsuario',$ObrasPublicadas[0]->getNombrePublicando())
            ->with('Yo',true);
            }
            else {
                return view('perfil')
                ->with('id',$Us->id)
                ->with('nombreUsuario',$DatosUsuario->name)
                ->with('Yo',true);
            }   
        }
        else
        {
            return redirect("/");
        }    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $dbObrasPublicadas=DB::table('vDashboard')->select()->orderBy('created_at','desc')->where('idUsuario',$id)->get();
        
        $ObrasPublicadas=array();
        foreach($dbObrasPublicadas as $obrasP)
        {

            $varUs=\Auth::User();

            $mObra=new modelObra();
            $mObra->setImgPortadaObra($obrasP->imgPortadaObra);
            $mObra->setIdObra($obrasP->idObra);
            $mObra->setIdUsuario($obrasP->idUsuario);
            $mObra->setIdGenero($obrasP->idGenero);
            $mObra->setIdCategoria($obrasP->idCategoria);
            $mObra->setIdAudiencia($obrasP->idAudiencia);
            $mObra->setIdAdvertencia($obrasP->idAdvertencia);
            $mObra->setTituloObra($obrasP->tituloObra);
            $mObra->setDescripcionObra($obrasP->descripcionObra);
            $mObra->setCreated_at($obrasP->created_at);
            $mObra->setUpdateded_at($obrasP->updated_at);

             //vDashboard
             $mObra->setNombreGenero($obrasP->nombreGenero);
             $mObra->setNombreCategoria($obrasP->nombreCategoria);
             $mObra->setNombreAudiencia($obrasP->nombreAudiencia);
             $mObra->setNombreAdvertencia($obrasP->nombreAdvertencia);
             $mObra->setAntiguedad($obrasP->antiguedad);
             $mObra->setNombrePublicando($obrasP->name);

            array_push($ObrasPublicadas,$mObra);
        }
        //echo $ObrasPublicadas[0]->getNombrePublicando();

        if($varUs->id==$id)
        {
            return view('perfil')
            ->with('ObrasPublicadas',$ObrasPublicadas)
            ->with('id',$id)
            ->with('nombreUsuario',$ObrasPublicadas[0]->getNombrePublicando())
            ->with('Yo', true);
        }
        else
        {
            $Seguir= new VistasController();
            return view('perfil')
            ->with('ObrasPublicadas',$ObrasPublicadas)
            ->with('id',$id)
            ->with('nombreUsuario',$ObrasPublicadas[0]->getNombrePublicando())
            ->with('seguir',$Seguir->getSeguir($id));
        }
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
