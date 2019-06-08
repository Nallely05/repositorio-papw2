<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelCapitulo extends Model
{
    protected $table= "tbl_capitulo";
    protected $idCapitulo;
    protected $idObra;
    protected $tituloCapitulo;
    protected $imagenCapitulo;
    protected $contenidoCapitulo;
    protected $created_at;
    protected $updated_at;


    protected $view= "vCapitulo";
    protected $antiguedad;
    protected $tituloObra;
    protected $idUsuario;
    protected $autor;

    public function getAntiguedad()
    {return $this->antiguedad;}
 
    public function setAntiguedad($antiguedad)
    { $this->antiguedad=$antiguedad;}

    public function getTituloObra()
    {return $this->tituloObra;}
 
    public function setTituloObra($tituloObra)
    { $this->tituloObra=$tituloObra;}

    public function getIdUsuario()
    {return $this->idUsuario;}
 
    public function setIdUsuario($idUsuario)
    { $this->idUsuario=$idUsuario;}

    public function getAutor()
    {return $this->autor;}
 
    public function setAutor($autor)
    { $this->autor=$autor;}


    public function __constructor(){}
        public function getIdCapitulo()
        {return $this->idCapitulo;}
     
        public function setIdCapitulo($idCapitulo)
        { $this->idCapitulo=$idCapitulo;}

        public function getIdObra()
        {return $this->idObra;}
     
        public function setIdObra($idObra)
        { $this->idObra=$idObra;}

        public function getTituloCapitulo()
        {return $this->tituloCapitulo;}
     
        public function setTituloCapitulo($tituloCapitulo)
        { $this->tituloCapitulo=$tituloCapitulo;}

        public function getImagenCapitulo()
        {return $this->imagenCapitulo;}
     
        public function setImagenCapitulo($imagenCapitulo)
        { $this->imagenCapitulo=$imagenCapitulo;}

        public function getContenidoCapitulo()
        {return $this->contenidoCapitulo;}
     
        public function setContenidoCapitulo($contenidoCapitulo)
        { $this->contenidoCapitulo=$contenidoCapitulo;}

        public function getCreated_at()
        {return $this->created_at;}

        public function setCreated_at($created_at)
        { $this->created_at=$created_at;}

        public function getUpdated_at()
        {return $this->updated_at;}

        public function setUpdateded_at($updated_at)
        { $this->updated_at=$updated_at;}
}
