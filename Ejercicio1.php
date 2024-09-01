<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    
    , initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
<h1>Ejercicio1</h1>
<?php

$estudiantes = [
    'Sebastina'=>[85,90,30],
    'Isabel' => [92, 88,50],
    'Andres' => [60, 73,82],
    'Aleja' => [90, 88, 95],
];

$mejorEstudiante = '';
$mejorPromedio = 0;
foreach ($estudiantes as $estudiante => $notas) {
    $promedio = array_sum($notas) / count($notas);
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $estudiante;
    }
}
echo "El mejor estudiante es $mejorEstudiante con un promedio de $mejorPromedio";



?>
</body>
</html>