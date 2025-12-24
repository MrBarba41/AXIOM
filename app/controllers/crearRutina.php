<?php 
    require_once __DIR__ . '/../models/db.php';
    require_once __DIR__ . '/../models/rutinas.php';
    $conexion = new DB() -> conexion();

try {

    $nombre = trim($_POST['nombre']) ?? '';
    $descripcion = trim($_POST['descripcion']) ?? '';
    
    if ($nombre === ''){
        http_response_code(400);
        echo json_encode(['error'=>'Campo obligatorio']);
        exit;
    }

    $crear = new Rutinas($conexion);
    $crear -> crear($nombre,$descripcion);

} catch(PDOException $e){

    http_response_code(500);
    error_log($e->getMessage());
    echo json_encode(['error' => 'Error al crear la rutina.']);
    exit;
}
?>