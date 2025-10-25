<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Crear nuevo Artista</h2>
        <form action="insertar.php" method="POST" enctype="multipart/form-data">
            <label for="fotografia">Fotografia:</label>
            <input type="file" name="fotografia"><br><br>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre"><br><br>

            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad"><br><br>

            <input type="submit" value="Guardar">
        </form>

        <a href="index.php">Volver</a>
    </div>
</body>
</html>