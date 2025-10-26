<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        include('conexion.php');

        $sql = "SELECT *FROM artistas";
        $result=$con->query($sql);
    ?>
    <h2>Artistas</h2>
    <a href="crear.php">Crear</a>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Fotografia</th>
            <th>Nombre</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
        </tr>
        <?php while($fila = mysqli_fetch_array($result)) {?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td>
                <?php if ($fila['fotografia']) { ?>
                    <img src="<?php echo $fila['fotografia']; ?>" width="200">
                <?php } else { echo "Sin foto"; } ?>
            </td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['nacionalidad']; ?></td>
            <td> <a href="">Editar</a> <a href="eliminar.php?id=<?php echo $fila['id']; ?>"
             onclick="return confirm('¿ Deseas Eliminar a <?= $fila['nombre'] ?> ?');">Eliminar</a></td>
        </tr>
        <?php  }  $con->close();?>
    </table>
</div>
</body>
</html>