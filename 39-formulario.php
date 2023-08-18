<!--METODO POST-->

<!--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    atributo action indica hacia donde queremos enviar los datos de nuestro formulario
        atributo method, consta de 2 variantes POST y GET 
        POST:
    -->
    <!--
    <form action="00-index.php" method="POST">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br /><br />


        <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="matematicas">matematicas</option>
            <option value="español">espa&nacute;ol</option>
            <option value="ingles">ingles</option>
        </select><br /><br />

        <label for="opcion-1">
            <input type="checkbox" name="frutas" id="opcion-1" value="Manzana">
            Manzana
        </label><br /><br />

        <button type="submit">Enviar</button>

    </form>
</body>

</html>
-->

<!--METODO GET-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="00-index.php" method="GET">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre"><br /><br />


        <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="Matematicas">Matematicas</option>
            <option value="Historia">Historia</option>
            <option value="Ingles">Ingles</option>
        </select><br /><br />

        <label for="opcion-1">
            <input type="checkbox" name="frutas" id="opcion-1" value="Manzana">
            Manzana
        </label><br /><br />

        <button type="submit">Enviar</button>

    </form>

</body>

</html>