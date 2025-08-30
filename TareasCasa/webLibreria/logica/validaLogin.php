<?php
session_start();
include "./conexion.php";

$usuario = $_POST['usuario'];
$clave = $_POST['password'];

$consulta = "SELECT*FROM usuarios WHERE usuario= '$usuario' AND password = '$clave'";
$resultado = mysqli_query($conexion, $consulta);
$array = mysqli_fetch_array($resultado);

if ($array) { // Verifica si la consulta devolvió un resultado
    if ($array['id_rol'] == 1) { // Administrador
        $_SESSION['usuario'] = $usuario;
        $_SESSION['loggedin'] = true;
        header("location: ../inicioAdmin.php");
    } elseif ($array['id_rol'] == 2) { // Cliente
        $_SESSION['usuario'] = $usuario;
        $_SESSION['loggedin'] = true;
        header("location: ../inicioUsuario.php");
    } else {
        header("location: ../login.php");
    }
} else {
    header("location: ../login.php");
}

mysqli_close($conexion);
?>
