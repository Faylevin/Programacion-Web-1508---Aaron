<?php

    $host_db="localhost:3306";
    $user_name="root";
    $user_pass="berserk";
    $db_name="libreria";

    $conexion = new mysqli($host_db,$user_name,$user_pass,$db_name);
    
    if($conexion->connect_error){
      }
      else{
        echo "<h1></h1>";
      } 
?>