<?php
require_once "Conexion.php";

class ModelAsignatura extends Conexion {

    public function insertar($nombre, $abreviatura) {
        $sql = "INSERT INTO asignatura (nombre, abreviatura) VALUES ('$nombre', '$abreviatura')";
        return $this->conexion->query($sql);
    }

    public function modificar($id, $nombre, $abreviatura) {
        $sql = "UPDATE asignatura SET nombre = '$nombre', abreviatura = '$abreviatura' WHERE id = '$id'";
        return $this->conexion->query($sql);
    }

    public function listar() {
        $sql = "SELECT * FROM asignatura";
        return $this->conexion->query($sql);
    }

    public function obtenerPorId($id) {
        $sql = "SELECT * FROM asignatura WHERE id = '$id'";
        return $this->conexion->query($sql);
    }
}
?>