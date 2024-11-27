<?php
session_start();
include './header.php';
include './logica/conexion.php';
?>

  <div class="row" style="margin-top:50px">
  <div class="col s6 offset-s3">
    <h4 class = 'center'><span>Ingresa tus Datos</span></h4>
    <form action="./logica/ValidarLogin.php" method="POST">
    <div class="input-field">
    <label >No_Mascota</label>
    <input type="text"  placeholder="numero_mascota" name="numero_mascota" requiredclass="form-control" id="NO_mascota" >
    
  </div>
  
  <div class="input-field">
    <label for="exampleInputPassword1">Clave</label>
    <input type="password" placeholder="password" name="password" requiredclass="form-control" id="exampleInputPassword1" placeholder="password">
  </div>
  
   <button type="submit" class="btn-large waves-effect waves-light green lighten-1" style="background-color:black;color:white">Iniciar Sesion</button>
   <a class='btn-large waves-effect waves-light red lighten-1' href='salir.php'>Salir</a>
  </form>
  
</div>
</div>

<?php  include 'footer.php';?>