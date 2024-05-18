<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "ventas_autos";

$conectar = mysqli_connect($host, $user, $pass, $bd);

if (!$conectar) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
