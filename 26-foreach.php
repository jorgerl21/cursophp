<?php
$laptop = ["Acer Nitro 5", "Winldows 11", "AMD Ryzen 5 4600H", "SSD 256GB", "RAM 24GB"];


foreach ($laptop as $indice => $valor) {
    echo $indice . " . " . $valor . "<br>";
}

echo "<br><br>";

$frutas = [
    "Fresas" => 100,
    "Peras" => 30,
    "Sandias" => 10,
    "Melocotones" => 17,
    "Manzana" => 9
];

foreach ($frutas as $indice => $valor) {
    echo "Hay $valor $indice en el inventario" . "<br>";
}

echo "<br><br>";

$productos = [
    ["codigo" => "A0001", "descripcion" => "Mouse"],
    ["codigo" => "A0002", "descripcion" => "Teclado"],
    ["codigo" => "A0003", "descripcion" => "Monitor"],
    ["codigo" => "A0004", "descripcion" => "Impresor"],
];

foreach ($productos as $prod) {
        echo $prod["codigo"]. " - " . $prod["descripcion"]. "<br>";    
}