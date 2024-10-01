<?php
include('./libreria/numero.php');
include('./libreria/nominas.php');

$salario = null;
$transporte = null;
$salud = null;
$pension = null;
$deducible = null;
$arl = null;
$totalPagar = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $valorDia = new trabajo(floatval($_POST['valorDia']));
    $diasTrabajados = new trabajo(intval($_POST['diasTrabajados']));

    $nominas = new nomina($valorDia, $diasTrabajados);

    // Calcular valores
    $salario = $nominas->salario();
    $transporte = $nominas->transportes();
    $salud = $nominas->salud();
    $pension = $nominas->pension();
    $deducible = $nominas->deducibles();
    $arl = $nominas->arls();
    $totalPagar = $nominas->totalPagar();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Nómina</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Cálculo de Nómina</h1>
        <form method="POST" id="nominaForm">
            <div class="form-group">
                <label for="valorDia">Valor del Día (en moneda)</label>
                <input type="number" class="form-control" id="valorDia" name="valorDia" step="any" required>
            </div>
            <div class="form-group">
                <label for="diasTrabajados">Días Trabajados</label>
                <input type="number" class="form-control" id="diasTrabajados" name="diasTrabajados" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <h2 class="mt-5">Resultados</h2>
            <p>Salario: <?= number_format($salario, 2) ?> </p>
            <p>Transporte: <?= number_format($transporte, 2) ?> </p>
            <p>Pago a Salud: <?= number_format($salud, 2) ?> </p>
            <p>Pensión: <?= number_format($pension, 2) ?> </p>
            <p>Deducible: <?= number_format($deducible, 2) ?> </p>
            <p>ARL: <?= number_format($arl, 2) ?> </p>
            <p>Total a Pagar: <?= number_format($totalPagar, 2) ?> </p>
        <?php endif; ?>
    </div>
</body>

</html>
