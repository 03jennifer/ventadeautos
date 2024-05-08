<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Obtener el nombre de usuario desde la sesión
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>Esta es tu página de inicio después de iniciar sesión.</p>
    <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
</body>
</html>
