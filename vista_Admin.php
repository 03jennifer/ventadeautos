

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilo_vistas.css">
    <title>Bienvenido, <?php echo $_SESSION['usuario']; ?>Administrador</title>

</head>

<body>
    <div class="contenedor">
            <div class="bienvenida">
            <?php
            session_start();

            if (isset($_SESSION['usuario'])) {
                // Obtener el género del usuario
                $genero = $_SESSION['genero'];

                // Mostrar un mensaje de bienvenida personalizado
                if ($genero == 'Hombre') {
                    echo "<p>Bienvenido, caballero. Disfruta de tu experiencia en nuestro sitio.</p>";
                } elseif ($genero == 'Mujer') {
                    echo "<p>Bienvenida, dama. Esperamos que te sientas cómoda en nuestro sitio.</p>";
                } else {
                    echo "<p>Bienvenido/a. Disfruta de tu experiencia...</p>";
                }
            } else {
                // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
                header("Location: login.php");
                exit();
            }
            ?>

    </div>
        <h1><?php echo $_SESSION['usuario']; ?></h1>
        <p>Esta es tu página de inicio después de iniciar sesión.</p>
        <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>


    </div>
</body>
</html>
