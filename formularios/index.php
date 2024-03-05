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
            <input type="submit" name="submit_registro" value="Enviar"><br><br>
            <input type="radio" name="sexo" id="hombre" value="hombre">
            <label for="hombre">Hombre</label>
            <input type="radio" name="sexo" id="mujer" value="mujer">
            <label for="mujer">Mujer</label><br><br>
            <select name="year">
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <!-- Repetir para años hasta 2005 -->
                <option value="2005">2005</option>
            </select><br><br>
            <input type="checkbox" name="terminos" id="terminos" value="true">
            <label for="terminos">Acepto los términos y condiciones</label><br><br>
        </form>
    </div>
</body>
</html>
