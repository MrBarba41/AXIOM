<?php 

require_once __DIR__ . '/../models/db.php';
require_once __DIR__ . '/../models/rutinas.php';
$conexion = new DB() -> conexion();

try {

    $eliminar = new Rutinas($conexion);
    $eliminar -> eliminar($id);

} catch (PDOException $e){

    http_response_code(500);
    error_log($e -> getMessage());
    echo json_encode(['error'=>'Error al eliminar la rutina.']);
    exit;
}

?>