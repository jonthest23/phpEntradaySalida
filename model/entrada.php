<?php

class entrada{
    private $id;
    private $horaEntrada;
    private $horaSalida;
    private $persona;

    public function sethoraEntrada($horaEntrada){
        $this->horaEntrada = $horaEntrada;
    }
    public function sethoraSalida($horaSalida){
        $this->horaSalida = $horaSalida;
    }
    public function setPersona($persona){
        $this->persona = $persona;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getPersona(){
        return $this->persona;
    }
    public function gethoraEntrada(){
        return $this->horaEntrada;
    }
    public function gethoraSalida(){
        return $this->horaSalida;
    }
    public function getId(){
        return $this->id;
    }
}



?>