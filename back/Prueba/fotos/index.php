<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Imagen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        .car-info {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .car-info img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="car-info">
        <h1>Verificación de Imagen del Automóvil</h1>
        <?php
        // Datos del automóvil
        $nombre = 'Toyota Camry';
        $rutaImagen = 'fotos/Toyota Camry.jpg';
        $descripcion = 'El Toyota Camry es un sedán mediano conocido por su fiabilidad y eficiencia. Es popular entre los conductores que buscan un automóvil cómodo y económico con un buen rendimiento en carretera. Con su reputación de durabilidad y bajos costos de mantenimiento, el Camry es una opción sólida tanto para conductores individuales como para familias.';
        ?>

        <h2><?php echo $nombre; ?></h2>
        <p><?php echo $descripcion; ?></p>
        <img src="<?php echo $rutaImagen; ?>" alt="<?php echo $nombre; ?>">
    </div>
</body>
</html>
