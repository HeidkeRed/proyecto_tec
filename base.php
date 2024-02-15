<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro - Persona</title>
</head>
<body>

<?php
// Configuración de conexión a la base de datos
$servername = "127.0.0.1"; //Sirve para ingresar el nombre del servidor
$username = "root";
$password = "";//En este caso no tenemos contraseña y lo dejamos asi
$dbname = "xd";//Nombre de nuestra base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}

// Procesar el formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_persona = $_POST["tipo_persona"];
    $nombre = $_POST["nombre"];
    $tipo_documento = $_POST["tipo_documento"];
    $numero_documento = $_POST["numero_documento"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];

    // Insertar datos en la tabla persona
    $sql = "INSERT INTO persona (tipo_persona, nombre, tipo_documento, numero_documento, direccion, telefono, email) VALUES ('$tipo_persona', '$nombre', '$tipo_documento', '$numero_documento', '$direccion', '$telefono', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<br>Registro exitoso";
    } else {
        echo "<br>Error al registrar: " . $conn->error;
    }
}
?>

<h2>Formulario de Registro - Persona</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Tipo de Persona:</label>
    <input type="text" name="tipo_persona" required><br>

    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Tipo de Documento:</label>
    <input type="text" name="tipo_documento"><br>

    <label>Número de Documento:</label>
    <input type="text" name="numero_documento"><br>

    <label>Dirección:</label>
    <input type="text" name="direccion"><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <input type="submit" value="Registrar">
</form>

<?php
// Cerrar conexión
$conn->close();
?>

</body>
</html>
