<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelObra extends Model
{
    
protected $table= "tbl_obra";
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


   public function getCreated_at()
   {return $this->created_at;}

   public function setCreated_at($created_at)
   { $this->created_at;}


   public function getUpdated_at()
   {return $this->updated_at;}

   public function setUpdateded_at($updated_at)
   { $this->updated_at;}
}
