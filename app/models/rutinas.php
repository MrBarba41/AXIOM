<?php 

require_once __DIR__ . '/../models/db.php';

class Rutinas {
    
    public static function crear($nombre,$descripcion){
        $conexion = new DB() -> conexion();

        $stmt = $conexion->prepare('INSERT INTO `rutinas` (`nombre`,`descripcion`) VALUES (:n , :d)');
    
        return $stmt->execute([':n' => $nombre,':d' => $descripcion]);

    }
}

?>