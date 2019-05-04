<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelObra extends Model
{
    
protected $table= "tbl_obra";
protected $imgPortadaObra;
protected $idObra;
protected $idUsuario;
protected $idGenero;
protected $idCategoria;
protected $idAudiencia;
protected $idAdvertencia;
protected $tituloObra;
protected $descripcionObra;
protected $created_at;
protected $updated_at;
//Datos de vDashboard
protected $nombreGenero;
protected $nombreCategoria;
protected $nombreAudiencia;
protected $nombreAdvertencia;
protected $antiguedad;
protected $nombrePublicando;


public function __constructor(){}

   public function getImgPortadaObra()
   {return $this->imgPortadaObra;}

   public function setImgPortadaObra($imgPortadaObra)
   { $this->imgPortadaObra=$imgPortadaObra;}

   public function getIdObra()
   {return $this->idObra;}

   public function setIdObra($idObra)
   { $this->idObra=$idObra;}

   public function getIdUsuario()
   {return $this->idUsuario;}

   public function setIdUsuario($idUsuario)
   { $this->idUsuario=$idUsuario;}

   public function getIdGenero()
   {return $this->idGenero;}

   public function setIdGenero($idGenero)
   { $this->idGenero=$idGenero;}

   public function getIdCategoria()
   {return $this->idCategoria;}

   public function setIdCategoria($idCategoria)
   { $this->idCategoria=$idCategoria;}

   public function getIdAudiencia()
   {return $this->idAudiencia;}

   public function setIdAudiencia($idAudiencia)
   { $this->idAudiencia=$idAudiencia;}

   public function getIdAdvertencia()
   {return $this->idAdvertencia;}

   public function setIdAdvertencia($idAdvertencia)
   { $this->idAdvertencia=$idAdvertencia;}

   public function getTituloObra()
   {return $this->tituloObra;}

   public function setTituloObra($tituloObra)
   { $this->tituloObra=$tituloObra;}

   public function getDescripcionObra()
   {return $this->descripcionObra;}

   public function setDescripcionObra($descripcionObra)
   { $this->descripcionObra=$descripcionObra;}

   public function getCreated_at()
   {return $this->created_at;}

   public function setCreated_at($created_at)
   { $this->created_at=$created_at;}

   public function getUpdated_at()
   {return $this->updated_at;}

   public function setUpdateded_at($updated_at)
   { $this->updated_at=$updated_at;}

   //de vDashboard
   public function getNombreGenero()
   {return $this->nombreGenero;}

   public function setNombreGenero($nombreGenero)
   { $this->nombreGenero=$nombreGenero;}

   public function getNombreCategoria()
   {return $this->nombreCategoria;}

   public function setNombreCategoria($nombreCategoria)
   { $this->nombreCategoria=$nombreCategoria;}

   public function getNombreAudiencia()
   {return $this->nombreAudiencia;}

   public function setNombreAudiencia($nombreAudiencia)
   { $this->nombreAudiencia=$nombreAudiencia;}

   public function getNombreAdvertencia()
   {return $this->nombreAdvertencia;}

   public function setNombreAdvertencia($nombreAdvertencia)
   { $this->nombreAdvertencia=$nombreAdvertencia;}

   public function getAntiguedad()
   {return $this->antiguedad;}

   public function setAntiguedad($antiguedad)
   { $this->antiguedad=$antiguedad;}

   public function getNombrePublicando()
   {return $this->nombrePublicando;}

   public function setNombrePublicando($nombrePublicando)
   { $this->nombrePublicando=$nombrePublicando;}
}
