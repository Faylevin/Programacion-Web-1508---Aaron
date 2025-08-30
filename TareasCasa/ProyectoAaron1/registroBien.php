<?php
include "./header.php";
session_start();
if (!isset($_SESSION['numero_mascota'])) {
  header("location: ./autorizacion.php");
  exit(); 
}
?>



<div class="row" style="margin-top:50px">
    <div class="col s6 offset-s3">
        <div>
            <div>
                <div class="center-align">
                    <h4 class="center">Registro creado con exito</h4>
                    <h5 class="center">Presiona para ver los registros</h5>
                    <a class='btn-large waves-effect waves-light blue lighten-1' href='inicio.php' >Ver registro</a>
                    <a class='btn-large waves-effect waves-light purple lighten-1' href='registro.php' >Hacer otro registro</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "./footer.php"; ?>