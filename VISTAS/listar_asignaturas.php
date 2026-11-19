<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Asignaturas</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>

    <h2>Listado de Asignaturas</h2>
    <a href="index.php?nombre_controlador=ControladorAsignatura&metodo=formularioRegistrar">Añadir Asignatura</a>
    <br><br>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Abreviatura</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = $controlador->listaAsignaturas->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['abreviatura']; ?></td>
                    <td>
                        <form action="index.php?nombre_controlador=ControladorAsignatura&metodo=formularioModificar" method="POST">
                            <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>