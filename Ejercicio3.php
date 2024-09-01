<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
<h1>Ejercicio3</h1>
<?php
$productos = [
    "Laptop" => [
        "precio" => 1200,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 4.5
        ]
    ],
    "Mouse" => [
        "precio" => 20,
        "detalles" => [
            "disponibilidad" => false,
            "reseñas" => 3.5
        ]
    ],
    "Teclado" => [
        "precio" => 50,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 4.0
        ]
    ],
    "Monitor" => [
        "precio" => 300,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 4.8
        ]
    ],


];

foreach ($productos as $nombre => $info) {
    echo "Producto: $nombre, Precio: $" . $info["precio"] . "\n";
    echo "<br>";

}

?>
</body>
</html>