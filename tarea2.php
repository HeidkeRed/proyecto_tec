<?php

// 1. Definir Constantes
define('MAXIMOESTUDIANTES', 50);

// Esto sirve para registrar de Estudiantes
$estudiantes = [];

// Agregar Nuevo Estudiante
function agregarEstudiante($nombre, $edad, $notas) {
    global $estudiantes;
    if (count($estudiantes) < MAXIMOESTUDIANTES) {
        $estudiantes[] = ['nombre' => $nombre, 'edad' => $edad, 'notas' => $notas];
        echo "Estudiante agregado.\n";
    } else {
        echo "Límite alcanzado.\n";
    }
}

// Ingresar Notas
function ingresarNotas($indice, $nuevaNota) {
    global $estudiantes;
    if (isset($estudiantes[$indice])) {
        $estudiantes[$indice]['notas'][] = $nuevaNota;
        echo "Nota ingresada exitosamente para el estudiante {$estudiantes[$indice]['nombre']}.\n";
    } else {
        echo "Índice de estudiante inválido.\n";
    }
}

// Mostrar Información de los Estudiantes
function mostrarInformacionEstudiantes() {
    global $estudiantes;
    echo "<ul>";
    foreach ($estudiantes as $estudiante) {
        $promedio = array_sum($estudiante['notas']) / count($estudiante['notas']);
        echo "<li>Nombre: {$estudiante['nombre']}, Edad: {$estudiante['edad']}, Promedio: $promedio</li>";
    }
    echo "</ul>";
}

// Contar Estudiantes
function contarEstudiantes() {
    global $estudiantes;
    echo "Total de estudiantes: " . count($estudiantes) . "\n";
}

//Ordenar por Promedio de Calificaciones
function ordenarPorPromedio($ascendente = true) {
    global $estudiantes;
    usort($estudiantes, function($a, $b) use ($ascendente) {
        $promedioA = array_sum($a['notas']) / count($a['notas']);
        $promedioB = array_sum($b['notas']) / count($b['notas']);
        return $ascendente ? $promedioA - $promedioB : $promedioB - $promedioA;
    });
}

// Ejemplo de uso
agregarEstudiante('Mon', 18, [80, 90, 85]);
agregarEstudiante('María', 17, [95, 85, 90]);
agregarEstudiante('Alan Wake', 20, [99, 95, 100]);
agregarEstudiante('Jesse Faden', 21, [99, 95, 100]);
ingresarNotas(0, 75);
mostrarInformacionEstudiantes();
contarEstudiantes();
ordenarPorPromedio();
mostrarInformacionEstudiantes();
ordenarPorPromedio(false);
mostrarInformacionEstudiantes();

echo "<ul>";
foreach ($estudiantes as $estudiante) {
    $promedio = array_sum($estudiante['notas']) / count($estudiante['notas']);
    echo "<li>Nombre: {$estudiante['nombre']}, Edad: {$estudiante['edad']}, Promedio: $promedio</li>";
}
echo "</ul>";
?>