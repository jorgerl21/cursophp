<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de archivos</title>
</head>
<body>
    <h3>Subir un archivo con PHP</h3>
    <form action="44-carga.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg">
        <br /> <br />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>