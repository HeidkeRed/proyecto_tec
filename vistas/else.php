<?php
// Obtener el mes actual
$mes = date('n');

// Condicionales para verificar el mes y mostrar el mensaje correspondiente
if ($mes == 1) {
    echo "¡Feliz Año Nuevo!";
} elseif ($mes == 12) {
    echo "¡Feliz Navidad!";
} elseif ($mes == 7) {
    echo "¡Feliz Julio!";
} else {
    echo "¡Bienvenido al mes " . date('F') . "!";
}
?>
