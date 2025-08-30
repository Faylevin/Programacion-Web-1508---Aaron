<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$registroEliminado = $_POST['numero_mascota'];
$registroEliminado = mysqli_real_escape_string($conexion, $registroEliminado);

$consulta = "DELETE FROM animales WHERE numero_mascota = '$registroEliminado'";

if (mysqli_query($conexion, $consulta)) {
    echo "Registro eliminado correctamente.";
} else {
    echo "Error al eliminar el registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);

header('Location: ../eliminarBien.php');
exit();
?>
