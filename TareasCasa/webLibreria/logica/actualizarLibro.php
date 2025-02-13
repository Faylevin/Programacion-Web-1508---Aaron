<?php include "header.php" ?>

<?php
include "./conexion.php";
mysqli_set_charset($conexion, 'utf8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ISBN = $_POST['ISBN'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $precio = $_POST['precio'];
    $tipo = $_POST['tipo'];
    $cantidad_stock = $_POST['cantidad_stock'];
    
    // Verificar si el libro existe
    $consulta = "SELECT * FROM libros WHERE ISBN = '$ISBN'";
    $resultado = $conexion->query($consulta);
    
    if (mysqli_num_rows($resultado) > 0) {
        // Si existe, actualizar los datos
        $actualizar = "UPDATE libros SET 
            titulo='$titulo',
            autor='$autor',
            editorial='$editorial',
            precio='$precio',
            tipo='$tipo',
            cantidad_stock='$cantidad_stock'
            WHERE ISBN='$ISBN'";
        
        if ($conexion->query($actualizar)) {
            header("location: ../inicioAdmin.php");
        } else {
            header("location: ../actualizacionError.php");
        }
    } else {
        header("location: ../libroNoEncontrado.php");
    }
}
?>
