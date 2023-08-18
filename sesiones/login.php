<?php 
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
    echo "Inciio de sesion incorrecto, ingrese los valores correctos";
}

?>