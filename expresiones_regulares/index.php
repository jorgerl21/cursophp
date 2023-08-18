<?php
//la sesiones almacenan informacion de los usuarios y alojan esta información dentro de un servidor, puede ser nube o fisico
/*
las expresiones regulares son una serie de carcteres que definen un patron de busqueda 
*/
session_name("LOGIN");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>

<body>
    <form action="login.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ()]{3-20}" maxlength="10">
        <br />
        <label for="">Clave</label>
        <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4-50}" maxlength="50">
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>