<?php
 require_once __DIR__.'/../controller/entrada/entrada_controller.php';
 require_once __DIR__.'/../controller/persona/persona_controller.php';
 $entradaController = new entradaController();
if(isset($_GET['texto'])){
    $texto = $_GET['texto'];
if($texto != ""){
 $personaController = new personaController(); 
    
    $personas = $personaController->buscarPersona($texto);
    $entradas = array();
    foreach($personas as $persona){
        $entrada = $entradaController->getEntradaPersona($persona->getid());
        $entradas[] = $entrada;
        
    }
    
    foreach($entradas as $entrada){

        foreach($entrada as $ent){
            $json[] = array(
                'id' => $ent->getId(),
                'Nombre'=> $ent->getPersona()->getnombre(),
                'Apellido'=> $ent->getPersona()->getapellido(),
                'entrada' => $ent->gethoraEntrada(),
                'salida' => $ent->gethoraSalida(),
            );
        }
    };
    if(isset($json)){
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }else{
        echo json_encode(array('success' => false));
    }
}else{
    $entradas = $entradaController->getList();
    foreach($entradas as $entrada){
        $json[] = array(
            'id' => $entrada->getId(),
            'Nombre'=> $entrada->getPersona()->getnombre(),
            'Apellido'=> $entrada->getPersona()->getapellido(),
            'entrada' => $entrada->gethoraEntrada(),
            'salida' => $entrada->gethoraSalida(),
        );
    };
    echo json_encode($json);
}
}else{
    $entradas = $entradaController->getList();
    foreach($entradas as $entrada){
        $json[] = array(
            'id' => $entrada->getId(),
            'Nombre'=> $entrada->getPersona()->getnombre(),
            'Apellido'=> $entrada->getPersona()->getapellido(),
            'entrada' => $entrada->gethoraEntrada(),
            'salida' => $entrada->gethoraSalida(),
        );
    };
    echo json_encode($json);
}

    
?>
