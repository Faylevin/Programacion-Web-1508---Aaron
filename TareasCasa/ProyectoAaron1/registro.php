<?php
include "./header.php";
session_start();
if (!isset($_SESSION['numero_mascota'])) {
  header("location: ./autorizacion.php");
  exit(); 
}
?>
    <header  >
        <h4 class="center">Registro en mi DB</h4>
    </header>
    
<div class="row" style="margin-top:50px">
    <div class="col s6 offset-s3">
        <form action="./logica/enviarRegistro.php" method="post">
            
            <div >
                <label for="numero_mascota">Ingresa nombre usuario:</label>
                <input type="text" name="numero_mascota" required maxlength="100" placeholder="numero_mascota">
                <br><br>
                <label for="nombre_mascota">nombre_mascota:</label>
                <input type="text" name="nombre_mascota" required maxlength="100" placeholder="nombre_mascota">
                <br><br>
                <label for="especie">especie:</label>
                <input type="text" name="especie" required maxlength="100" placeholder="especie">
                <br><br>
                <label for="raza">raza:</label>
                <input type="text" name="raza" required maxlength="100" placeholder="raza">
                <br><br>
                <label for="edad">edad:</label>
                <input type="number" name="edad" required maxlength="100" placeholder="edad">
                <br><br>
                <label for="sexo">sexo:</label>
                <input type="text" name="sexo" required maxlength="8" placeholder="sexo">
                <br><br>
                <label for="peso">peso</label>
                <input type="text" name="peso" required maxlength="8" placeholder="peso">
                <br><br>
                <label for="password">contraseña:</label>
                <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
            <button class="btn-large waves-effect waves-light blue lighten-1" type="submit" name="action">Enviar registro</button>
        </form>
        <div style="text-align: center; margin-top: 30px;">
        <a class='btn-large waves-effect waves-light green lighten-1' href='salir.php'>Salir</a>
        <a class='btn-large waves-effect waves-light red lighten-1' href='eliminar.php' >Eliminar Anima</a>
        <a class='btn-large waves-effect waves-light orange lighten-1' href='inicio.php' >Regresar </a>
        </div>
    </div>
</div>
<?php  include 'footer.php';?>