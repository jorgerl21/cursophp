<?php 

    function saludo($nombre){
        return "Hola mi nombre es: $nombre";
    }
    
    echo saludo("Jorge"); 
    echo "<br>";

    $usuario = "Ivan";
    echo saludo($usuario);

    echo "<br>";

    echo saludo($nombre = "Axl");

    echo "<br><br>";

    function promedio_Alumno($nota1, $nota2, $nota3){
        $promedio = ($nota1 + $nota2 + $nota3)/3;
        return $promedio;
    }

    echo "Tu promedio es de : " . promedio_Alumno(10, 10, 10);
    
?>