<?php
require_once('global.php');

// Crear conexión
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Verificar la conexión
if ($conn->connect_error) {
    //die("Conexión fallida: " . $conn->connect_error);
} else {
    //echo "Conexión exitosa a la base de datos.";
}

if (!function_exists('ejecutarConsulta')) {
    function ejecutarConsulta($sql)
    {
        global $conn;
        $query = $conn->query($sql);
        return $query;
    }

    function ejecutarConsultaSimpleFila($sql)
    {
        global $conn;
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();
        return $row;
    }

    function ejecutarConsulta_retornarID($sql)
    {
        global $conn;
        $query = $conn->query($sql);
        return $conn->insert_id;
    }

    function limpiarCadena($str)
    {
        global $conn;
        $str = mysqli_real_escape_string($conn, trim($str));
        return htmlspecialchars($str);
    }
}
?>
