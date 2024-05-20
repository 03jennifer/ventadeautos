<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido, <?php echo $_SESSION['usuario']; ?> Usuario</title>
    <link rel="stylesheet" href="estilo_vistas.css">

</head>
<body>
    <div class="toolbar">
        <div class="toolbar-container">
            <div class="toolbar-section">
                <a href="vista_usuario.php" id="casa">
                    <img width="50px" height="40px" 
                    src="img/minimal-house-icon-website-symbol-site-sign-ui-home-icon-home-creative-icon-minimalist-vector.jpg" alt="Inicio">
                    <br>Inicio
                </a>
            </div>
            <div class="toolbar-section">
                <a href="perfil.php">Perfil</a>
            </div>
            <div class="toolbar-section">
                <a href="usuario_compras.php">Mis Compras</a>
            </div>
            <div class="toolbar-section">
                <a href="usuario_catalogo.php">Catálogo</a>
            </div>
            <div class="toolbar-section">
                <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="bienvenida">
            <?php
            // Obtener el género del usuario
            $genero = $_SESSION['genero'];

            // Mostrar un mensaje de bienvenida personalizado
            if ($genero == 'Hombre') {
                echo "<p>Bienvenido, caballero.</p>";
            } elseif ($genero == 'Mujer') {
                echo "<p>Bienvenida, dama.</p>";
            } else {
                echo "<p>Bienvenido/a. Disfruta de tu experiencia...</p>";
            }
            ?>
        </div>

        <h1><?php echo $_SESSION['usuario']; ?></h1>
        <p>Esta es tu página de inicio después de iniciar sesión.</p>
    </div>
</body>
</html>
