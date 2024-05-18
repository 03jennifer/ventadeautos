<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Vehículos por Marca</title>
    <!-- Enlazar estilos CSS -->
    <link rel="stylesheet" href="estilo_inventario.css">
    <link rel="stylesheet" href="estilo_Superadmin.css">
</head>
<body>
<div class="toolbar">
        <div class="toolbar-container">
            <div class="toolbar-section">
                <a href="vista_SuperAdmin.php" id="casa">
                    <img width="50px" height="40px" src="img/minimal-house-icon-website-symbol-site-sign-ui-home-icon-home-creative-icon-minimalist-vector.jpg" alt=""></a>
            </div>
            <div class="toolbar-section">
                <a href="#">Usuarios</a>
            </div>
            <div class="toolbar-section">
                <a href="#">Administradores</a>
            </div>
            <div class="toolbar-section">
                <a href="inventario.php">Inventarios</a>
            </div>
            <div class="toolbar-section">
                <a href="#">Catálogo</a>
            </div>
            <div class="toolbar-section">
            <a href="cerrar_sesion.php">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    <div class="container">
   
        <h1>Inventario de Vehículos por Marca</h1>

        <?php
        // Ejemplo de datos de vehículos (simulación de base de datos)
        $vehiculos = array(
            array("marca" => "Toyota", "modelo" => "Corolla", "precio" => 15000),
            array("marca" => "Honda", "modelo" => "Civic", "precio" => 18000),
            array("marca" => "Ford", "modelo" => "Mustang", "precio" => 35000),
            array("marca" => "Toyota", "modelo" => "Camry", "precio" => 22000),
            array("marca" => "Ford", "modelo" => "Explorer", "precio" => 30000),
            array("marca" => "Chevrolet", "modelo" => "Camaro", "precio" => 32000),
            array("marca" => "Chevrolet", "modelo" => "Silverado", "precio" => 28000),
            array("marca" => "Toyota", "modelo" => "Rav4", "precio" => 25000),
            array("marca" => "Ford", "modelo" => "F-150", "precio" => 32000),
        );

        // Agrupar vehículos por marca
        $vehiculos_por_marca = array();
        foreach ($vehiculos as $vehiculo) {
            $marca = $vehiculo["marca"];
            if (!isset($vehiculos_por_marca[$marca])) {
                $vehiculos_por_marca[$marca] = array();
            }
            $vehiculos_por_marca[$marca][] = $vehiculo;
        }

        // Mostrar tablas separadas por marca
        foreach ($vehiculos_por_marca as $marca => $vehiculos) {
            echo '<h2>' . $marca . '</h2>';
            echo '<table>';
            echo '<tr><th>Modelo</th><th>Precio</th></tr>';
            foreach ($vehiculos as $vehiculo) {
                echo '<tr>';
                echo '<td>' . $vehiculo["modelo"] . '</td>';
                echo '<td>$' . number_format($vehiculo["precio"], 2) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
        ?>

    </div>
</body>
</html>
