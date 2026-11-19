<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Asignatura</title>
</head>
<body>

    <h2>Modificar Asignatura</h2>

    <form action="index.php?nombre_controlador=ControladorAsignatura&metodo=modificar" method="POST">
        
        <input type="hidden" name="id" value="<?php echo $controlador->asignatura['id']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $controlador->asignatura['nombre']; ?>" required>
        <br><br>

        <label for="abreviatura">Abreviatura:</label>
        <input type="text" id="abreviatura" name="abreviatura" value="<?php echo $controlador->asignatura['abreviatura']; ?>" required>
        <br><br>

        <input type="submit" value="Guardar Cambios">
        
    </form>

</body>
</html>