<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Verificar que el valor del ISBN está definido y no está vacío
if (isset($_POST['ISBN']) && !empty($_POST['ISBN'])) {
    // Escapar el valor de ISBN para evitar inyección SQL
    $registroEliminado = mysqli_real_escape_string($conexion, $_POST['ISBN']);
    
    // Crear la consulta SQL correctamente con comillas alrededor del valor
    $consulta = "DELETE FROM libros WHERE ISBN = '$registroEliminado'";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $consulta)) {
        // Si la consulta fue exitosa, redirigir
        header('Location: ./borrarexitosa.php');
    } else {
        // Si hubo un error, mostrarlo
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    echo "El ISBN no está definido o está vacío";
}

// Cerrar la conexión
mysqli_close($conexion);
?>
