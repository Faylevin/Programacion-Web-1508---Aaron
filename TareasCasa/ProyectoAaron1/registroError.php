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
                    <h4 class="center">Error al crear registro</h4>
                    <h5 class="center">Vuelve a intentarlo</h5>
                    <a class='btn-large waves-effect waves-light red lighten-1' href='registro.php' >Volver a intentar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require "./footer.php"; ?>