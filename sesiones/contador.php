<?php 
    //session_name("CON");
    session_name("LOGIN");
    session_start();  
/* 
    if (isset($_SESSION['contador'])) {
        $_SESSION['contador']++;
    }else {
        $_SESSION['contador']=1;
    }
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones en PHP</title>
</head>
<body>
    <?php 
    echo "Hola " . $_SESSION['Nombre'] . "";
    ?>
    <a href="cerrar.php">Eliminar sesion</a>
    
</body>
</html>