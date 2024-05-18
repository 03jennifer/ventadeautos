<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Autos</title>
    <link rel="stylesheet" href="estilo.css"> <!-- Enlazar archivo de estilos CSS -->
</head>
<body>
    <div class="toolbar">
        <div class="toolbar-container">
            <div class="toolbar-section">
                <a href="#">Registrarse</a>
            </div>
            <div class="toolbar-section">
                <a href="login.php">Iniciar Sesión</a>
            </div>
            <div class="toolbar-section">
                <a href="index.php#">Promociones</a>
            </div>
            <div class="toolbar-section">
                <a href="catalogo.php">Catálogo</a>
            </div>
            <div class="toolbar-section">
                <a href="#" id="carrito-enlace">Carrito (<span id="carrito-contador">0</span>)</a>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>Autos en Venta</h1>
        
        <div class="car-list">
            <?php
            // Ejemplo de datos de autos (simulación de base de datos)
            $autos = array(
                array("marca" => "Toyota", "modelo" => "Corolla", "precio" => 15000, "imagen" => "Toyota-Yaris-2.jpg"),
                array("marca" => "Honda", "modelo" => "Civic", "precio" => 18000, "imagen" => "57e5bae4a3fdfc0d4c0944dc71d1387b.jpg"),
                array("marca" => "Ford", "modelo" => "Mustang", "precio" => 35000, "imagen" => "main-qimg-12077303d89125422cb80603232fca33-lq.jpeg"),
                array("marca" => "Chevrolet", "modelo" => "Camaro", "precio" => 32000, "imagen" => "Ford-Fiesta.jpg"),
            );

            // Iterar sobre cada auto y mostrarlos en tarjetas
            foreach ($autos as $auto) {
                echo '<div class="car-item">';
                echo '<img src="img/' . $auto["imagen"] . '" alt="' . $auto["marca"] . ' ' . $auto["modelo"] . '" class="car-image">';
                echo '<h2>' . $auto["marca"] . ' ' . $auto["modelo"] . '</h2>';
                echo '<p>Precio: $' . number_format($auto["precio"], 2) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
