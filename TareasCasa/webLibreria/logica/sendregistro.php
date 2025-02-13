
<?php include "../header.php" ?>

<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$ISBN=$_POST['ISBN'];

$buscarusuario="SELECT * FROM  libros WHERE ISBN ='$ISBN'";

$resultado = $conexion -> query($buscarusuario);
$count =mysqli_num_rows($resultado);
if($count==1){
    echo"El usuario ya esta registrado";
    echo "<a href='../registrolibro.php'>Nuevo registro</a>";

}else{

    mysqli_query($conexion,"INSERT INTO libros (ISBN, titulo, autor, editorial, precio, tipo, cantidad_stock) 
            VALUES (
            '$_POST[ISBN]',
            '$_POST[titulo]',
            '$_POST[autor]',
            '$_POST[editorial]',
            '$_POST[precio]',
            '$_POST[tipo]',
            '$_POST[cantidad_stock]'
        )");
        echo "<br> <h1>registro se ha creado con exito</h1>";
        echo "<a href='../registrolibro.php'>Puedes generar un Nuevo registro</a>";
        echo"<hr>";
        echo " <a href='../inicioAdmin.php'>Regrasar a registros</a>";
}

?>


<?php include "../footer.php" ?>