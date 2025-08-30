<?php
include "./header.php";
session_start();
if (!isset($_SESSION['numero_mascota'])) {
  header("location: ./autorizacion.php");
  exit(); 
}
?>

<?php
require "logica/conexion.php";
mysqli_set_charset($conexion,'utf8');

$consulta_sql="SELECT * FROM animales";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado); 



echo "<div style='max-width: 1500px; margin: 0 auto;'>";
echo "<table class='centered highlight responsive'>
    <tr>
        <th style= 'padding: 8px;'>No. Mascota</th>
        <th style= 'padding: 8px;'>Mascota</th>
        <th style= 'padding: 8px;'>Especie</th>
        <th style= 'padding: 8px;'>Raza</th>
        <th style= 'padding: 8px;'>Edad</th>
        <th style= 'padding: 8px;'>Sexo</th>
        <th style= 'padding: 8px;'>Peso</th>
        <th style= 'padding: 8px;'>Password</th>
    </tr>";

if ( $count>0 ){
    //aqui se pintarian los registro de la DB
    while( $row = mysqli_fetch_assoc($resultado)  ){
     echo "<tr>";
     echo"<td>". $row['numero_mascota'] ."</td>";
     echo"<td>". $row['nombre_mascota'] ."</td>";
     echo"<td>". $row['especie'] ."</td>";
     echo"<td>". $row['raza'] ."</td>";
     echo"<td>". $row['edad'] ."</td>";
     echo"<td>". $row['sexo'] ."</td>";
     echo"<td>". $row['peso'] ."</td>";
     echo"<td>". $row['password'] ."</td>";
     echo "</tr>";
     echo "<style>
        .centered th {
            text-align: center;
        }
      </style>";
    }
    echo "</table>";

}else{
    
    echo " <h4 class='center'>No hay ningun registro</h4>";
 } 
  echo "
<div>
<h4>
  <div style='text-align: center;'>
    <a class='btn-large waves-effect waves-light green lighten-1' href='salir.php'>Salir</a>
    <a class='btn-large waves-effect waves-light blue lighten-1' href='registro.php' >Registrar Anima</a>
    <a class='btn-large waves-effect waves-light red lighten-1' href='eliminar.php' >Eliminar Anima</a>
    </h4>
</div>

</div>
  ";
    
?>
<a href=""></a>
<?php
    
  include "./footer.php"
?>
