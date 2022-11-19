<?php
require_once __DIR__ . "/../conexion_controller.php";
require_once __DIR__ ."/../../model/entrada.php";
require_once __DIR__ ."/../persona/persona_controller.php";

class entradaController{

    public function getList(){
        $conexion = new conexionController();
        $personaController = new personaController();
        $sql = "SELECT * FROM entrada";
        $result = $conexion->query($sql);
        $entradas = [];
        while($row = $result->fetch_assoc()){
            $entrada = new entrada();
            $entrada->setid($row["id"]);
            $entrada->sethoraEntrada($row["entrada"]);
            $entrada->sethoraSalida($row["salida"]);
            $entrada->setPersona($personaController->getPersona($row["persona"]));
            array_push($entradas, $entrada);
        }
        $conexion->close();
        return $entradas;
    }

    public function getEntradaPersona($personacod){
        $conexion = new conexionController();
        $personaController = new personaController();
        $sql = "SELECT * FROM entrada WHERE persona = $personacod";
        $result = $conexion->query($sql);
        $entrada = new entrada();
        $list = [];
        while($row = $result->fetch_assoc()){
            $entrada->setId($row["id"]);
            $entrada->sethoraEntrada($row["entrada"]);
            $entrada->sethoraSalida($row["salida"]);
            $entrada->setPersona($personaController->getPersona($row["persona"]));
            array_push($list, $entrada);
        }
        $conexion->close();
        return $list;
    }
    

    public function updateEntrada($id){
        $conexion = new conexionController();
        $sql = "UPDATE entrada SET entrada = '".date("y-m-d h:i:s")."' WHERE id = '".$id."'";
        $result = $conexion->query($sql);
        $conexion->close();
        return $result;
    }

    public function updateSalida($id){
        $conexion = new conexionController();
        $sql = "UPDATE entrada SET salida = '".date("y-m-d h:i:s")."' WHERE id = '".$id."'";
        $result = $conexion->query($sql);
        $conexion->close();
        return $result;
    }
  



}

?>