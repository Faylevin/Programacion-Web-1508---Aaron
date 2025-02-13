
<?php
include "./header.php";
require "logica/conexion.php";
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: ./index.php");
    exit();
}

mysqli_set_charset($conexion,'utf8');

$consulta_sql="SELECT * FROM libros";

$resultado = $conexion->query($consulta_sql);

$count = mysqli_num_rows($resultado); 

?>

<style>
    .sidenav {
        width: 250px;
    }
</style>

<!-- dashboard -->
<ul id="sidenav-left" class="sidenav sidenav-fixed">
    <li>
        <div class="user-view">
            <div class="background blue darken-3"></div>
            <a href="#user"><img class="circle" src="media\Admin.jpg"></a>
            <a href="#name"><span class="white-text name">Admin</span></a>
            <a href="#email"><span class="white-text email">Admin@email.com</span></a>
        </div>
    </li>
    <li><a href="#" class="waves-effect"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href="#" class="waves-effect"><i class="material-icons">person</i>Perfil</a></li>
    <li><a href="#" class="waves-effect"><i class="material-icons">settings</i>Configuración</a></li>
    <li><div class="divider"></div></li>
    <li><a href="login.php" class="waves-effect"><i class="material-icons">exit_to_app</i>Salir</a></li>
</ul>

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


<div class='card login-box border-radius 19px' style='max-width: 1300px; margin: 0 auto;'>
    <table class='highlight responsive'>
        <tr>
            <th style='padding: 8px;'>ISBN</th>
            <th style='padding: 8px;'>Título</th>
            <th style='padding: 8px;'>Autor</th>
            <th style='padding: 8px;'>Editorial</th>
            <th style='padding: 8px;'>Categoría</th>
            <th style='padding: 8px;'>Precio</th>
            <th style='padding: 8px;'>Stock</th>
        </tr>

        <?php if ($count > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['ISBN']); ?></td>
                    <td><?php echo htmlspecialchars($row['titulo']); ?></td>
                    <td><?php echo htmlspecialchars($row['autor']); ?></td>
                    <td><?php echo htmlspecialchars($row['editorial']); ?></td>
                    <td><?php echo htmlspecialchars($row['tipo']); ?></td>
                    <td><?php echo htmlspecialchars($row['precio']); ?></td>
                    <td>
                        <?php 
                            $stock = $row['cantidad_stock'];
                            if ($stock < 5) {
                                echo "<span style='color: red; font-weight: bold;'>$stock 🔴</span>"; 
                            } else {
                                echo $stock;
                            }
                        ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7" class="center"><h4>No se encontraron registros</h4></td>
            </tr>
        <?php endif; ?>
    </table>
</div>
<div>
<h4>
  <div style='text-align: center;'>
    <a class='btn-small waves-effect waves-light green lighten-1' href='registrolibro.php' >Registrar</a>
    <a class='btn-small waves-effect waves-light blue lighten-1' href='actualizar.php' >Actualizar</a>
    <a class='btn-small waves-effect waves-light red lighten-1' href='eliminarlibro.php' >Eliminar</a>
    </h4>
</div>

</div>