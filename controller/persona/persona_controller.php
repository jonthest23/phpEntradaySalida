<?php
require_once __DIR__."/../conexion_controller.php";
require_once __DIR__."/../../model/persona.php";
class personaController{
    public function getList(){
        $conexion = new conexionController();
        $sql = "SELECT * FROM persona";
        $result = $conexion->query($sql);
        $personas = array();
        while($row = $result->fetch_assoc()){
            $persona = new persona();
            $persona->setid($row["id"]);
            $persona->setnombre($row["nombre"]);
            $persona->setapellido($row["apellido"]);
            $personas[] = $persona;
        }
        $conexion->close();
        return $personas;
    }
    public function getPersona($id){
        $conexion = new conexionController();
        $sql = "SELECT * FROM persona WHERE id = $id";
        $result = $conexion->query($sql);
        $persona = new persona();
        if($result){
        while($row = $result->fetch_assoc()){
            $persona->setid($row["id"]);
            $persona->setnombre($row["nombre"]);
            $persona->setapellido($row["apellido"]);
        }
            return $persona;
        }else{
            $persona->setid(0);
            $persona->setnombre("No existe");
            $persona->setapellido("No existe");
            return $persona;
        }
        $conexion->close();
        
    }

    public function buscarPersona($nombre){
        $conexion = new conexionController();
        $sql = "SELECT * FROM persona WHERE nombre LIKE '%$nombre%'";
        $result = $conexion->query($sql);
        $personas = array();
        while($row = $result->fetch_assoc()){
            $persona = new persona();
            $persona->setid($row["id"]);
            $persona->setnombre($row["nombre"]);
            $persona->setapellido($row["apellido"]);
            $personas[] = $persona;
        }
        $conexion->close();
        return $personas;
    }
    
}


?>