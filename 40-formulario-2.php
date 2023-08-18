<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="00-index.php" method="POST">

        <label for="asignatura">Asignatura</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="Matematicas">Matematicas</option>
            <option value="Historia">Historia</option>
            <option value="Ingles">Ingles</option>
        </select><br /><br />

        <label for="opcion-1">
            <input type="checkbox" name="frutas[]" id="opcion-1" value="Manzana">
            Manzana
        </label><br /><br />

        <label for="opcion-2">
            <input type="checkbox" name="frutas[]" id="opcion-2" value="Fresa">
            Fresa
        </label><br /><br />

        <label for="opcion-3">
            <input type="checkbox" name="frutas[]" id="opcion-3" value="Mango">
            Mango
        </label><br /><br />

        <button type="submit">Enviar</button>

    </form>

</body>

</html>