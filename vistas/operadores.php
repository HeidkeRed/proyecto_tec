<?php
// Definir dos números
$num1 = 10;
$num2 = 5;

// Realizar operaciones con los dos números
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;
$modulo = $num1 % $num2;
$incremento = ++$num1;
$decremento = --$num2;

// Imprimir los resultados
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
echo "Módulo: " . $modulo . "<br>";
echo "Incremento: " . $incremento . "<br>";
echo "Decremento: " . $decremento . "<br>";

// Realizar operaciones con los dos números y utilizar operadores de asignación
$num1 += $num2; // Equivalente a: $num1 = $num1 + $num2;
$num2 -= 2;     // Equivalente a: $num2 = $num2 - 2;
$num1 *= 3;     // Equivalente a: $num1 = $num1 * 3;
$num2 /= 2;     // Equivalente a: $num2 = $num2 / 2;
$num1 %= 4;     // Equivalente a: $num1 = $num1 % 4;

// Imprimir los resultados de las operaciones con asignación
echo "Resultado de la operación con asignación de \$num1: $num1<br>";
echo "Resultado de la operación con asignación de \$num2: $num2<br>";
?>
