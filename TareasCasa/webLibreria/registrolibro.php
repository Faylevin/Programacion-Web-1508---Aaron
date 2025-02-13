<?php include "header.php" ?>

<?php
// Iniciar sesión
session_start();

// Verificar si existe la sesión
if (!isset($_SESSION['usuario'])) {
   // Redirigir al usuario al índice si no está autenticado
   header("Location: ./index.php");
   exit();
}

// Obtener el valor de la sesión
$usuario= $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="styles.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <title>Nuevo registro</title>
</head>
<body>
   <header class="center-align">
       <h3>¿NUEVO LIBRO? ¡REGÍSTRALO!</h3>
   </header>
   
   <style>
    .login-box {
        border-radius: 15px;
        border: 1px solid black;
        z-index: 1;
        padding: 100px

    }
    .button-container {
    display: flex;
    justify-content: center;  
    align-items: center;      
    height: 100px; 
}
</style>

   <div class="row center-align">
       <div class="col s16 m6 offset-m3 card login-box border-radius 19px">
           <form class="col s12" action="./logica/sendregistro.php" method="post">
               <div class="input-field col s12">
                   <i class="material-icons prefix">confirmation_number</i>
                   <input id="ISBN" type="text" name="ISBN" required maxlength="20" placeholder="Ingresa el ISBN del libro">
                   <label for="ISBN">ISBN</label>
               </div>
               <div class="input-field col s12">
                   <i class="material-icons prefix">book</i>
                   <input id="titulo" type="text" name="titulo" required maxlength="255" placeholder="Ingresa el título del libro">
                   <label for="titulo">Título</label>
               </div>
               <div class="input-field col s12">
                   <i class="material-icons prefix">person</i>
                   <input id="autor" type="text" name="autor" required maxlength="255" placeholder="Ingresa el autor del libro">
                   <label for="autor">Autor</label>
               </div>
               <div class="input-field col s12">
                   <i class="material-icons prefix">business</i>
                   <input id="editorial" type="text" name="editorial" maxlength="255" placeholder="Ingresa la editorial del libro">
                   <label for="editorial">Editorial</label>
               </div>
               <div class="input-field col s12">
                   <i class="material-icons prefix">category</i>
                   <input id="tipo" type="text" name="tipo" maxlength="255" placeholder="Ingresa la categoría del libro">
                   <label for="tipo">Categoría</label>
               </div>
               <div class="input-field col s12">
                   <i class="material-icons prefix">attach_money</i>
                   <input id="precio" type="number" name="precio" required step="0.01" placeholder="Ingresa el precio del libro">
                   <label for="precio">Precio</label>
               </div>
               <div class="input-field col s12">
                   <i class="material-icons prefix">inventory</i>
                   <input id="cantidad_stock" type="number" name="cantidad_stock" required min="0" value="0" placeholder="Ingresa la cantidad en stock">
                   <label for="cantidad_stock">Cantidad en Stock</label>
               </div>
               <div >
                   <button type="submit" class="btn waves-effect waves-light blue lighten-1">Crear Registro</button>
               </div>
           </form>
       </div>
   </div>

   <hr>
   <h4 class="center-align"><a href='./inicioAdmin.php' class='btn waves-effect waves-light orange lighten-1'>REGRESAR A REGISTROS</a></h4>

<?php include "footer.php" ?>
</body>
</html>
