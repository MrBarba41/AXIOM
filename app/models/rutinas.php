<?php 

require_once __DIR__ . '/../models/db.php';

class Rutinas {
    
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function crear($nombre,$descripcion){

        $stmt = $this -> conexion -> prepare('INSERT INTO `rutinas` (`nombre`,`descripcion`) VALUES (:n , :d)');
        return $stmt->execute([':n' => $nombre,':d' => $descripcion]);

    }

    public function eliminar($id){
    
    $stmt = $this -> conexion -> prepare('DELETE FROM `rutinas` WHERE id = (:i)');
    return $stmt->execute([':i' => $id]);

    }
}

?>