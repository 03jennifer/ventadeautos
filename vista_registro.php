<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="estilo_login.css">
</head>
<body>
  
    <form action="registro.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" id="contrasena" required><br><br>
        <label for="tipo_usuario">Tipo de Usuario:</label>
        <select name="tipo_usuario" id="tipo_usuario" required>
            <option value="1">SuperAdministrador</option>
            <option value="2">Administrador</option>
            <option value="3">Usuario</option>
        </select><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
