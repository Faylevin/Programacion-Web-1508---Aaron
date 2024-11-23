<?php
include "./header.php";
session_start();
if (!isset($_SESSION['numero_mascota'])) {
  header("location: ./autorizacion.php");
  exit(); 
}
?>
<header>
    <h4 class="center">Eliminar Usuario:</h4>
</header>

<div class="row" style="margin-top:50px">
    <div class="col s6 offset-s3">
        <form method="POST" action="./logica/deleteUsuario.php">
            <div>
                <label for="numero_mascota">Ingresar número de mascota:</label>
                <input type="text" placeholder="Número de mascota" name="numero_mascota" required class="form-control" id="numero_mascota">
            </div>

            <div style>
                <button class="btn-large waves-effect waves-light red lighten-1" type="submit" name="action">Eliminar usuario</button>
            </div>
        </form>

        <div style="text-align: center; margin-top: 30px;">
        <a class='btn-large waves-effect waves-light green lighten-1' href='salir.php'>Salir</a>
        <a class='btn-large waves-effect waves-light blue lighten-1' href='registro.php' >Registrar Anima</a>
        <a class='btn-large waves-effect waves-light orange lighten-1' href='inicio.php' >Regresar </a>
        </div>
    </div>
</div>

<?php  include 'footer.php';?>
