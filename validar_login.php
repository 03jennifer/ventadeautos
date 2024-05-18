<?php
session_start();

// Validar y limpiar los datos del formulario
$usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : '';

if (empty($usuario) || empty($contrasena)) {
    die("Por favor, ingresa tu nombre de usuario y contraseña.");
}

// Incluir el archivo de conexión a la base de datos
include('conexion.php');

// Consulta preparada para seleccionar el usuario por su nombre
$consulta = "SELECT id, usuario, contrasena, tipo_usuario, genero FROM usuarios WHERE usuario = ?";
$stmt = mysqli_prepare($conectar, $consulta);

if ($stmt === false) {
    die('Error en la consulta SQL: ' . mysqli_error($conectar));
}

// Enlazar el parámetro (nombre de usuario) a la consulta preparada
mysqli_stmt_bind_param($stmt, "s", $usuario);

// Ejecutar la consulta preparada
mysqli_stmt_execute($stmt);

// Obtener el resultado de la consulta
$resultado = mysqli_stmt_get_result($stmt);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_assoc($resultado);

    // Verificar si la contraseña en texto plano es correcta
    if ($contrasena === $fila['contrasena']) {
        // La contraseña es correcta
        $_SESSION['usuario'] = $fila['usuario'];
        $_SESSION['tipo_usuario'] = $fila['tipo_usuario'];

        // Almacenar el género en la sesión
        $_SESSION['genero'] = $fila['genero'];

        // Redireccionar según el tipo de usuario
        switch ($fila['tipo_usuario']) {
            case 1:
                header("Location: vista_SuperAdmin.php");
                exit();
            case 2:
                header("Location: vista_Admin.php");
                exit();
            case 3:
                header("Location: vista_Usuario.php");
                exit();
            default:
                echo "Tipo de usuario desconocido.";
                break;
        }
    } else {
        // La contraseña es incorrecta
        echo "Contraseña incorrecta. Intenta de nuevo.";
        exit();
    }
} else {
    // El usuario no existe
    echo "Usuario no encontrado.";
    exit();
}

// Cerrar la consulta preparada y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conectar);
?>
