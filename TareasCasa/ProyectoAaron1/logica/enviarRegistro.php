<?php
include "./conexion.php";
mysqli_set_charset($conexion,'utf8');
$nombreUser=$_POST['numero_mascota'];

$consulta="SELECT * FROM animales WHERE numero_mascota ='$nombreUser'";

$resultado = $conexion -> query($consulta);
$count =mysqli_num_rows($resultado);
if($count==1){
    header("location: ../registroError.php");

}else{

    mysqli_query($conexion,"INSERT INTO animales(
        numero_mascota, nombre_mascota, especie, raza, edad, sexo, peso, password)
        VALUES(
            '$_POST[numero_mascota]',
            '$_POST[nombre_mascota]',
            '$_POST[especie]',
            '$_POST[raza]',
            '$_POST[edad]',
            '$_POST[sexo]',
            '$_POST[peso]',
            '$_POST[password]'
        )");
        header("location: ../registroBien.php");
}
 

