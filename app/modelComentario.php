<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelComentario extends Model
{
    protected $table= "tbl_comentario";
    protected $idComentario;
    protected $idCapitulo;
    protected $idUsuario;
    protected $comentario;
    protected $estado;
    protected $created_at;
    protected $updated_at;

        
    public function __constructor(){}

        public function getIdComentario()
        {return $this->idComentario;}
    
        public function setIdComentario($idComentario)
        { $this->idComentario=$idComentario;}

        
        public function getIdCapitulo()
        {return $this->idCapitulo;}
    
        public function setIdCapitulo($idCapitulo)
        { $this->idCapitulo=$idCapitulo;}

        
        public function getIdUsuario()
        {return $this->idUsuario;}
    
        public function setIdUsuario($idUsuario)
        { $this->idUsuario=$idUsuario;}

         
        public function getComentario()
        {return $this->comentario;}
    
        public function setComentario($comentario)
        { $this->comentario=$comentario;}

         
        public function getEstado()
        {return $this->estado;}
    
        public function setEstado($estado)
        { $this->estado=$estado;}

        public function getCreated_at()
        {return $this->created_at;}
     
        public function setCreated_at($created_at)
        { $this->created_at=$created_at;}
     
        public function getUpdated_at()
        {return $this->updated_at;}
     
        public function setUpdateded_at($updated_at)
        { $this->updated_at=$updated_at;}
       
}
