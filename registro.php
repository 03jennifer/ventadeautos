<?php
// Código para registrar un nuevo usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $tipo_usuario = $_POST['tipo_usuario'];

    // Encriptar la contraseña antes de guardarla
    $hashedPassword = password_hash($contrasena, PASSWORD_BCRYPT);

    // Incluir el archivo de conexión a la base de datos
    include('conexion.php');

    $query = "INSERT INTO usuarios (usuario, contrasena, tipo_usuario) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conectar, $query);
    mysqli_stmt_bind_param($stmt, "sss", $usuario, $hashedPassword, $tipo_usuario);
    
    if (mysqli_stmt_execute($stmt)) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error: " . mysqli_error($conectar);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conectar);
}
?>
