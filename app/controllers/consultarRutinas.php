<?php 
    require_once __DIR__ . "/../models/db.php";
    require_once __DIR__ . "/../models/rutinas.php";

    $conexion = new DB() -> conexion();

    try {

        $consulta = new Rutinas($conexion);
        $consulta -> consultar();

    } catch (PDOException $e){

        http_response_code(500);
        error_log($e->getmessage());
        echo json_encode(['error'=>'Error al obetener los datos requeridos.']);
        exit;
        
    }

?>