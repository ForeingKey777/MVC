<?php
    require_once 'CONTROLADOR/' . ($_GET['nombre_controlador'] ?? 'ControladorAsignatura') . '.php';
    
    $controlador = new ($_GET['nombre_controlador'] ?? 'ControladorAsignatura')();

    $controlador->{$_GET['metodo'] ?? 'listar'}();

    include $controlador->vista;
?>