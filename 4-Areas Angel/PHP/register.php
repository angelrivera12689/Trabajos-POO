

<?php
include('calcular_area.php');
include('lado.php');


$info = file_get_contents("php://input");
$dataLado = json_decode($info, true);


$base = new lado($dataLado['base']);
$altura = new lado($dataLado['altura']);




$figura = new Calcular_area($base, $altura);


$area_cuadrado = $figura->area_cuadrado();
$area_triangulo = $figura->area_triangulo();
$area_rectangulo = $figura->area_rectangulo();


$dataOperaciones = [
    "cuadrado" => $area_cuadrado,
    "triangulo" => $area_triangulo,
    "rectangulo" => $area_rectangulo
];

header('Content-Type: application/json');
echo json_encode($dataOperaciones);


?>
