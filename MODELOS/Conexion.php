<?php

class Conexion {
    private $servidor = 'localhost';
    private $usuario = 'root';
    private $contrasena = '';
    private $bbdd = 'index';

    public $conexion;

    public function __construct() {
        
        $this->conexion = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->bbdd);

        if ($this->conexion->connect_error) {

            die("Error Numero: " . $this->conexion->connect_error);
        }
    }
}

?>
