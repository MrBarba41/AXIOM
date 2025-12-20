<?php 
    require_once __DIR__ . '/../models/db.php';
    $conexion = new DB()->conexion();

try {

    $nombre = trim($_POST['nombre']) ?? '';
    $descripcion = trim($_POST['descripcion']) ?? '';
    
    if ($nombre === ''){
        http_response_code(400);
        echo json_encode(['error'=>'Campo obligatorio']);
        exit;
    }

    $stmt = $conexion->prepare('INSERT INTO `rutinas` (`nombre`,`descripcion`) VALUES (:n , :d)');
    
    $stmt->execute([':n' => $nombre,':d' => $descripcion]);

} catch(PDOException $error){

    http_response_code(500);
    error_log($error->getMessage());
    echo json_encode(['error' => 'Error al crear la rutina.']);
    exit;
}
?>