<?php
require_once 'MODELOS/ModelAsignatura.php';

class ControladorAsignatura {

    public $vista;
    public $mensaje;
    public $listaAsignaturas;
    public $asignatura;
    private $modelo;

    public function __construct() {
        $this->modelo = new ModelAsignatura();
    }

    public function registrar() {
        $nombre = $_POST['nombre'] ?? '';
        $abreviatura = $_POST['abreviatura'] ?? '';

        $resultado = $this->modelo->insertar($nombre, $abreviatura);

        if ($resultado) {
            $this->mensaje = "Asignatura registrada correctamente.";
        } else {
            $this->mensaje = "Error al registrar la asignatura.";
        }

        $this->vista = 'VISTAS/mensaje.php';
    }

    public function listar() {
        $this->listaAsignaturas = $this->modelo->listar();
        $this->vista = 'VISTAS/listar_asignaturas.php';
    }

    public function formularioModificar() {
        $id = $_POST['id'] ?? '';
        $resultado = $this->modelo->obtenerPorId($id);
        $this->asignatura = $resultado->fetch_assoc();
        $this->vista = 'VISTAS/modificar_asignatura.php';
    }

    public function modificar() {
        $id = $_POST['id'] ?? '';
        $nombre = $_POST['nombre'] ?? '';
        $abreviatura = $_POST['abreviatura'] ?? '';

        $resultado = $this->modelo->modificar($id, $nombre, $abreviatura);

        if ($resultado) {
            $this->mensaje = "Asignatura modificada correctamente.";
        } else {
            $this->mensaje = "Error al modificar la asignatura.";
        }

        $this->vista = 'VISTAS/mensaje.php';
    }

    public function formularioRegistrar() {
    $this->vista = 'VISTAS/formulario_asignatura.html';
}
}
?>