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

   public function getUpdated_at()
   {return $this->updated_at;}

   public function setUpdateded_at($updated_at)
   { $this->updated_at=$updated_at;}
}
