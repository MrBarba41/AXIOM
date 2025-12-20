<?php

class DB {
    private $host = 'localhost';
    private $user = 'root';
    private $dbname = 'axiom';
    private $password = '';
    private $charset = 'utf8mb4';
    
    public function conexion(){    
        try {
            $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname .';charset='. $this->charset;
            $conexion = new PDO($dsn,$this->user,$this->password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo "Error al conectar: ". $e->getMessage();
        }
    }
    
}
?>