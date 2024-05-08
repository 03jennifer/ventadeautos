<?php
// Verificar si se recibieron datos del formulario
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar las credenciales (ejemplo básico, reemplazar con autenticación real)
    if ($username === 'usuario' && $password === 'contraseña') {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['username'] = $username;
        header('Location: dashboard.php'); // Redireccionar a la página de inicio (dashboard)
        exit;
    } else {
        // Credenciales incorrectas, mostrar mensaje de error
        $error_message = "Usuario o contraseña incorrectos. Por favor, intenta de nuevo.";
    }
} else {
    // Redireccionar si se intenta acceder directamente a este archivo sin datos del formulario
    header('Location: login.php');
    exit;
}
?>
