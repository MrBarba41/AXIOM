<?php 

require_once __DIR__ . '/../models/db.php';
$conexion = new DB() -> conexion();

try {

    
    $stmt = $conexion -> prepare('DELETE FROM `rutinas` WHERE id = (:i)');
    
    $stmt->execute([':i' => $id]);

} catch (PDOException $e){

    http_response_code(500);
    error_log($e -> getMessage());
    echo json_encode(['error'=>'Error al eliminar la rutina.']);
    exit;
}

?>