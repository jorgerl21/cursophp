<?php 
$c = 1;

while ($c <= 20) {
    echo $c . "<br>";
    if ($c == 10) {
        break; 
    }
    $c++;
}

echo "<p></p>";
echo "<br><br>";

$pc=["SO","SSD","GPU","RAM","CPU"];

foreach ($pc as $valor) {
    echo $valor . "<br>";
    if ($valor == "GPU") {
        break;
    }
}
echo "<p></p>";
echo "<br><br>";

//continue
foreach ($pc as $valor) {
    
    if ($valor == "GPU") {
        continue;
    }
    echo $valor . "<br>";
}

echo "<p></p>";
echo "<br><br>";

//break con for

for ($i=1; $i <= 10  ; $i++) { 
    echo $i . "<br>";
    if ($i == 5) {
        break;
    }
}

echo "<p></p>";
echo "<br><br>";
//continue con for

for ($i=1; $i <= 10  ; $i++) { 
   
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
}
?>