<?php
// Definimos la variable $edad
$edad = 17;

// Operadores de comparación
// Igualdad
if ($edad == 17) {
    echo "La edad es igual a 17.<br>";
}

// Menor que
if ($edad < 18) {
    echo "La edad es menor que 18.<br>";
}

// Mayor que
if ($edad > 16) {
    echo "La edad es mayor que 16.<br>";
}

// Menor o igual que
if ($edad <= 17) {
    echo "La edad es menor o igual a 17.<br>";
}

// Mayor o igual que
if ($edad >= 17) {
    echo "La edad es mayor o igual a 17.<br>";
}

// Diferente
if ($edad != 18) {
    echo "La edad no es igual a 18.<br>";
}

// Negación
if (!($edad == 18)) {
    echo "La edad no es igual a 18 (usando negación).<br>";
}

// Operadores lógicos
$numero = 15;

// && - Evalúa que se cumpla una de las dos condiciones
if ($edad >= 18 && $numero > 10) {
    echo "La edad es mayor o igual a 18 y el número es mayor que 10.<br>";
}

// ||, OR - Evalúa que se cumpla al menos una condición
if ($edad >= 18 || $numero > 20) {
    echo "La edad es mayor o igual a 18 o el número es mayor que 20.<br>";
}

// xor - Evalúa que se cumpla una y solo una condición
if ($edad >= 18 xor $numero > 20) {
    echo "La edad es mayor o igual a 18 o el número es mayor que 20, pero no ambos.<br>";
}

// Mostrar el HTML según la edad
if ($edad >= 18) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edad</title>
    </head>
    <body>
        <h1>Bienvenido</h1>
        <p>Adelante</p>
    </body>
    </html>
    <?php
    } else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edad</title>
    </head>
    <body>
        <h1>Eres menor de edad!</h1>
        <p>No puedes visitar este sitio</p>
    </body>
    </html>
    <?php
    }
    