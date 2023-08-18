<?php 
/*
^ indica que ahi es el inicio de la cadena
$indica el final de la cadena
*/
if (!preg_match("/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ()]{3-20}$/",$_POST["usuario"])) {
    echo "El usuario no coioncide con el formato solicitado";
    exit();
}

if (!preg_match("/^[a-zA-Z0-9$@.-]{4-50}$/",$_POST["clave"])) {
    echo "La clave no coioncide con el formato solicitado";
    exit();
}

if ($_POST['usuario']=="Jorge" && $_POST['clave']=="1234") {
    session_name('LOGIN');
    session_start();

    $_SESSION['Nombre']="Jorge";
    $_SESSION['Apellido']="Limas";
    $_SESSION['Pais'] = "Mexico";

    //echo "Sesion iniciada";

    /*
    NOTA: header causara error si existen etiquetas HTML antes de su declaracion
    tambien causara error si mandamos algun mensaje con la etiqueta echo 
    */
    header("Location: contador.php");

    if (headers_sent()) {
        echo "<script> window.location.href='index.php';</script>";
    } else {
        header("Location: contador.php");
    }
    
} else {
    echo "Incio de sesion incorrecto, ingrese los valores correctos";
}

?>