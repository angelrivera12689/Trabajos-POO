
<?php
include('libreria/operador.php');  
$operandos = new operandos();
$operaciones = new operaciones();

$operandos-> setNum1(1);
$operandos-> setNum2(2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Encapsuladas</title>
</head>
<body>
    <?php

    echo "Suma en encapsulamiento " . $operaciones-> sumar($operandos->getNum1(),$operandos->getNum2()) . "<br>"; 
    echo "Resta en encapsulamiento " . $operaciones-> restar($operandos->getNum1(),$operandos->getNum2()) . "<br>"; 
    echo "Multiplicar en encapsulamiento " . $operaciones-> multiplicar($operandos->getNum1(),$operandos->getNum2()) . "<br>"; 
    echo "Dividir en encapsulamiento " . $operaciones-> dividir($operandos->getNum1(),$operandos->getNum2()) . "<br>"; 
  

    ?>
    
</body>
</html>