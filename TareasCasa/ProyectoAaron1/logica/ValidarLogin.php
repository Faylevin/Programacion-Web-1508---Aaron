<?php
session_start();
include "./conexion.php";

$mascota = $_POST['numero_mascota'];
$clave = $_POST['password'];

$q = "SELECT COUNT(*) as contar from animales where numero_mascota= '$mascota' and password = '$clave'";
$consulta = mysqli_query($conexion, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    $_SESSION['numero_mascota'] = $mascota; // Guardar la mascota en la sesión
    $_SESSION['loggedin'] = true; // Indicador de sesión activa
    header("location: ../inicio.php");
} else {
    header("location: ../indexError.php");
}
mysqli_close($conexion);
?>
