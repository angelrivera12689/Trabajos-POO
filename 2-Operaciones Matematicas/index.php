<?php

include ('libreria/numero.php');
include ('libreria/operaciones.php');

$num1 = new  Numero(5);
$num2 = new  Numero(5);

$operaciones = new  Operaciones($num1, $num2);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Matematicas</title>
</head>
<body>
<?php
echo "Suma en asociacion " . $operaciones->sumar() . "<br>"; 
echo "Resta en asociacion " . $operaciones->resta() . "<br>";
echo "Multiplicacion en asociacion " . $operaciones->multiplicacion() . "<br>";
echo "Division en asociacion " . $operaciones->division() . "<br>";


?>
    
</body>
</html>