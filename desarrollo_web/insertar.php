<?php
    include('conexion.php');

    $nombre = $_POST['nombre'];
    $nacionalidad = $_POST['nacionalidad'];

    $ruta = "";
    if (!empty($_FILES['fotografia']['name'])) {
        $ruta = "fotografias/" . basename($_FILES['fotografia']['name']);
        move_uploaded_file($_FILES['fotografia']['tmp_name'], $ruta);
    }

    $con->query("INSERT INTO artistas (fotografia, nombre, nacionalidad)
                      VALUES ('$ruta', '$nombre', '$nacionalidad')");


?>

    <p>Se creo corectamente</p>
    <meta http-equiv="refresh" content="2;url=index.php">