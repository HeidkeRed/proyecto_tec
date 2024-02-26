<?php
// Obtener el mes actual
$mes = date('n');

// Condicionales utilizando switch para verificar el mes y mostrar el mensaje correspondiente
switch ($mes) {
    case 1:
        echo "¡Feliz Año Nuevo!";
        break;
    case 12:
    case 11:
    case 10:
        echo "¡Felices fiestas de fin de año!";
        break;
    case ($mes > 2 && $mes < 6):
        echo "¡Bienvenido a la primavera!";
        break;
    case ($mes > 5 && $mes < 9):
        echo "¡Disfruta del verano!";
        break;
    case ($mes > 8 && $mes < 12):
        echo "¡Bienvenido al otoño!";
        break;
    default:
        echo "¡Feliz " . date('F') . "!";
}
?>
