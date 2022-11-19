<?php
require_once __DIR__.'/../controller/entrada/entrada_controller.php';


if(isset($_GET['id'])){
    $entradaController = new entradaController();
    $entradaController->updateEntrada($_GET['id']);
    echo json_encode(array('success' => true));
}else{
    http_response_code(400);
    echo json_encode(array('success' => false));
}

    


?>