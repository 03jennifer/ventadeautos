<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Incluir el archivo de conexión
include 'conexion.php';

// Actualizar los datos del vehículo si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['guardar'])) {
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $sql_update = "UPDATE automoviles SET Marca='$marca', Modelo='$modelo', Precio='$precio', Cantidad='$cantidad' WHERE id='$id'";
    if ($conectar->query($sql_update) === TRUE) {
        echo "Registro actualizado correctamente";
    } else {
        echo "Error al actualizar el registro: " . $conectar->error;
    }
}

// Consulta SQL para obtener los automóviles
$sql = "SELECT id, Marca, Modelo, Precio, Cantidad FROM automoviles";
$result = $conectar->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Agrupar vehículos por marca
    $vehiculos_por_marca = array();
    while($row = $result->fetch_assoc()) {
        $marca = $row["Marca"];
        if (!isset($vehiculos_por_marca[$marca])) {
            $vehiculos_por_marca[$marca] = array();
        }
        $vehiculos_por_marca[$marca][] = $row;
    }
} else {
    echo "No se encontraron resultados.";
}
$conectar->close();
?>

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
                    <img width="50px" height="40px" src="img/minimal-house-icon-website-symbol-site-sign-ui-home-icon-home-creative-icon-minimalist-vector.jpg" alt="">
                </a>
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
        // Mostrar tablas separadas por marca
        if (!empty($vehiculos_por_marca)) {
            foreach ($vehiculos_por_marca as $marca => $vehiculos) {
                echo '<h2>' . $marca . '</h2>';
                echo '<table>';
                echo '<tr><th>Modelo</th><th>Precio</th><th>Cantidad</th><th>Acciones</th></tr>';
                foreach ($vehiculos as $vehiculo) {
                    echo '<tr>';
                    echo '<td>' . $vehiculo["Modelo"] . '</td>';
                    echo '<td>$' . number_format($vehiculo["Precio"], 2) . '</td>';
                    echo '<td>' . $vehiculo["Cantidad"] . '</td>';
                    echo '<td>';
                    echo '<form method="POST" action="">';
                    echo '<input type="hidden" name="id" value="' . $vehiculo["id"] . '">';
                    echo '<input type="text" name="marca" value="' . $vehiculo["Marca"] . '">';
                    echo '<input type="text" name="modelo" value="' . $vehiculo["Modelo"] . '">';
                    echo '<input type="text" name="precio" value="' . $vehiculo["Precio"] . '">';
                    echo '<input type="number" name="cantidad" value="' . $vehiculo["Cantidad"] . '">';
                    echo '<input type="submit" name="guardar" value="Guardar">';
                    echo '</form>';
                    echo '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            }
        }
        ?>
    </div>
</body>
</html>
