<?php
// Declaración de tipos de variables
$entero = 10;
$decimal = 5.5;
$cadena = "Hola";
$booleano = true;

// Variable llamada "nombre" y concatenación
$nombre = "Cesar";
$mensaje = "Bienvenido, " . $nombre . "!";

// Uso de gettype con una variable 
$variable = "Texto";
$tipoDeVariable = gettype($variable);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP y HTML</title>
</head>
<body>

<p>El tipo de variable es: <?php echo $tipoDeVariable; ?></p>
<p><?php echo $mensaje; ?></p>

</body>
</html>