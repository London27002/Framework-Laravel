<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
<h1>Ejercicio2</h1>
<?php
$empleados = [
    'Juan' => [
        'salario' => 3000,
        'fecha_contratacion' => '2020-01-15',
        'departamento' => 'Ventas'
    ],
    'Maria' => [
        'salario' => 3500,
        'fecha_contratacion' => '2019-01-15',
        'departamento' => 'Marketing'
    ],
    'Pedro' => [
        'salario' => 3200,
        'fecha_contratacion' => '2018-01-15',
        'departamento' => 'Ventas'
    ],
    'Luis' => [
        'salario' => 4000,
        'fecha_contratacion' => '2017-01-15',
        'departamento' => 'Marketing'
    ],

];

foreach ($empleados as $nombre => $info) {
    echo "Empleado: $nombre, Salario: $" . $info["salario"] . "\n";
    echo "<br>";

}

?>
</body>
</html>