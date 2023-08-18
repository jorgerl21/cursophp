<?php 
/*
para definir un arreglo de datos se pueden usar dos tipos de nomenclatura
la primera es $nombre_VAriable array() y la otra es nombre_Arreflo[]
*/
//array de tipo escalar
$estudiantes = array('Jorge', 'Diego', 'Ivan', 'Erick');
//Se manda llamar un valor en la posicion 0 de el arreglo
echo $estudiantes[3] . '<br>';
echo "<br>";

//cambiar el valor de un dato dentro del arreglo
$estudiantes[3]='Fercho';
echo "<br>";

echo $estudiantes[3];
echo count($estudiantes);

echo "<br><br>";


//array de tipo asociativo
$tutor = ['Nombre' => 'Jorge', 'Apellido' => 'Limas', 'Edad' => 26];
echo $tutor['Nombre'];
echo count($tutor);

echo "<br><br>";

//array de multiples dimenciones
//array tipo asociativo combinado con escalar
$tutor2 = ['Nombre' => 'Diego', 'Apellido' => 'Rodriguez', 'Edad' => 25, 'Materias'=>['español', 'matematicas','geografia']];
echo $tutor2['Materias'][0] . '<br>';
echo $tutor2['Materias'][0] = 'geografia';
echo count($tutor2);

echo "<br><br>";


//array tipo asociativo combinado con asociativo
$tutor3 = ['Nombre' => 'Diego',
           'Apellido' => 'Rodriguez', 
           'Edad' => 25, 
           'Materias'=>['materia1' => 'español', 'materia2' => 'matematicas']];
echo $tutor3['Materias']['materia1'] . '<br>';
echo $tutor3['Materias']['materia1'] = 'geografia';
echo count($tutor3);

echo "<br><br>";
?>
