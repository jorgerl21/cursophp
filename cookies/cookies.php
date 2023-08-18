<?php 
/*
las cookies son archivos que se encargan de guardar informacion sobre el usuario
intaxis de las cookies
setcookie("nombre", valor, expiracion, dir, dominio, secure, httponly);
*/
setcookie("Idioma", "es", time()+60*60*24*365, "/", "localhost" , false , false); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Cookies</title>
</head>
<body>
    <h1> <?php echo $_COOKIE['Idioma'];?> </h1>
</body>
</html>