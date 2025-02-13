

<?php include "header.php" ?>
 

<?php
// Iniciar sesión
session_start();

// Verificar si la sesión del usuario está activa
if (!isset($_SESSION['usuario'])) {
    // Redirigir al inicio de sesión si no hay sesión activa
    header("Location: index.php");
    exit();
}
?>

<style>
    .login-box {
        border-radius: 15px;
        border: 1px solid black;
        z-index: 1;
        padding: 80px

    }

    .button-container {
    display: flex;
    justify-content: center;  
    align-items: center;      
    height: 100px; 
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar libro</title>
</head>


<body>
    <h1 style="text-align: center;">Elimina libro</h1>
    <div class= "row center-align">
    <div class="col s16 m6 offset-m3 card login-box border-radius 19px ">
    <form style="text-align: center;" method="POST" action="./logica/borrarlibro.php">
        <div class="row">
            <div class="input-field col s12">
        <input type="text" name="ISBN" placeholder=" Ingresa ISBN para borrar el registro" required />
        </div>
        </div>
        <br />
        <div class= "button-container">
        <button type="submit">Eliminar libro</button>
        </div>
    </form>
    </div>
    </div>
    </div>
    <div>
    <h4>
  <div style='text-align: center;'>
    <a class='btn-small waves-effect waves-light blue lighten-1' href='inicioAdmin.php' >Regresar a registros</a>
    </h4>
</div>
</body>

</html>

