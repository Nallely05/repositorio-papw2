<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelSeguir extends Model
{
    protected $table= "tbl_seguir";
    protected $idSeguir;
    protected $idUsuarioSeguidor;
    protected $idUsuarioSeguido;
    protected $created_at;
    protected $updated_at;

    public function __constructor(){}

    public function getIdSeguir()
    {return $this->idSeguir;}

    public function setIdSeguir($idSeguir)
    { $this->idSeguir = $idSeguir;}

    
    public function getIdUsuarioSeguidor()
    {return $this->idUsuarioSeguidor;}

    public function setIdUsuarioSeguidor($idUsuarioSeguidor)
    { $this->idUsuarioSeguidor = $idUsuarioSeguidor;}


    public function getIdUsuarioSeguido()
    {return $this->idUsuarioSeguido;}

    public function setIdUsuarioSeguido($idUsuarioSeguido)
    { $this->idUsuarioSeguido = $idUsuarioSeguido;}


    public function getCreated_at()
    {return $this->created_at;}

    public function setCreated_at($created_at)
    { $this->created_at = $created_at;}


    public function getUpdated_at()
    {return $this->updated_at;}

    public function setUpdateded_at($updated_at)
    { $this->updated_at = $updated_at;}
}
