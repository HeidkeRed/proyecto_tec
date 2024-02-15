<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>

<?php
// Definir variables
$nombreCompleto = "Mon";
$edad = 25;
$cantidadDinero = 1000.50;
$teGustaProgramar = true;

// Uso de diferentes tipos de datos
$ejemploString = "Hola, soy una cadena.";
$ejemploInteger = 42;
$ejemploDouble = 3.14;
$ejemploBoolean = false;

// Concatenación de cadenas
$mensajeBienvenida = $nombreCompleto . ", bienvenido/a!";

// Operaciones numéricas
$suma = $edad + $cantidadDinero;
$resta = $cantidadDinero - $edad;
$multiplicacion = $edad * $ejemploDouble;
$division = $cantidadDinero / $ejemploInteger;

// Uso de constantes
define("TASA_CAMBIO", 1.2);
$conversionDivisa = $cantidadDinero * TASA_CAMBIO;
?>

<!-- Presentación de resultados en HTML -->
<h1><?php echo $mensajeBienvenida; ?></h1>

<p>Operaciones numéricas:</p>
<ul>
    <li>Suma: <?php echo $suma; ?></li>
    <li>Resta: <?php echo $resta; ?></li>
    <li>Multiplicación: <?php echo $multiplicacion; ?></li>
    <li>División: <?php echo $division; ?></li>
</ul>

<p>Uso de constantes:</p>
<p>Cantidad de dinero en otra divisa: <?php echo $conversionDivisa; ?></p>

</body>
</html>