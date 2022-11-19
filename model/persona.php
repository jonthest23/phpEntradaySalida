<?php

class persona{
    private $id;
    private $nombre;
    private $apellido;

    public function setid($id){
        $this->id = $id;
    }
    public function setnombre($nombre){
        $this->nombre = $nombre;
    }
    public function setapellido($apellido){
        $this->apellido = $apellido;
    }
    public function getid(){
        return $this->id;
    }
    public function getnombre(){
        return $this->nombre;
    }
    public function getapellido(){
        return $this->apellido;
    }

}
?>