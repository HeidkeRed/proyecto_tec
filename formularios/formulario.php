<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
        <h2>Formulario de Registro</h2>
        <form action="validar_envio.php" method="GET">
            <input type="text" name="nombre" placeholder="Ingrese su nombre"><br><br>
            <input type="email" name="correo" placeholder="Ingrese su correo electrónico"><br><br>
            <input type="submit" name="submit_registro" value="Enviar"><br><br>
        </form>
    </div>
</body>
</html>
