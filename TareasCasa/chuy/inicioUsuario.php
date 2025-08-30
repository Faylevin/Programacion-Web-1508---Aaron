<?php
include "./header.php";
require "logica/conexion.php";
session_start();

if (!isset($_SESSION['usuario'])) {
    header("location: ./autorizacion.php");
    exit();
}

mysqli_set_charset($conexion, 'utf8');

// Recuperar los parámetros de búsqueda
$autor = isset($_POST['autor']) ? $_POST['autor'] : '';  
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
$tipo = isset($_POST['tipo']) ? $_POST['tipo'] : '';

// Crear la consulta SQL con filtros
$consulta_sql = "SELECT * FROM libros WHERE 1=1";

if ($autor) {
    $consulta_sql .= " AND LOWER(autor) LIKE LOWER('%" . mysqli_real_escape_string($conexion, $autor) . "%')";
}
if ($titulo) {
    $consulta_sql .= " AND LOWER(titulo) LIKE LOWER('%" . mysqli_real_escape_string($conexion, $titulo) . "%')";
}
if ($tipo) {
    $consulta_sql .= " AND LOWER(tipo) LIKE LOWER('%" . mysqli_real_escape_string($conexion, $tipo) . "%')";
}

$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);
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

<div class= "row center-align">
<div class="col s16 m6 offset-m3 card login-box border-radius 19px ">
    <form class="col s12" action="inicioUsuario.php" method="post">
        <div>
            <div class="input-field col s3">
                <i class="material-icons prefix">account_circle</i>
                <input id="autor" placeholder="Autor" type="text" name="autor" class="validate" value="<?php echo htmlspecialchars($autor); ?>">
                <label for="autor"></label>
            </div>
            <div class="input-field col l-auto s3">
                <i class="material-icons prefix">book</i>
                <input id="titulo" placeholder="Titulo de libro" type="text" name="titulo" class="validate" value="<?php echo htmlspecialchars($titulo); ?>">
                <label for="titulo"></label>
            </div>
            <div class="input-field col s3">
                <i class="material-icons prefix">category</i>
                <input id="tipo" placeholder="categoria" type="text" name="tipo" class="validate" value="<?php echo htmlspecialchars($tipo); ?>">
                <label for="tipo"></label>
            </div>
        </div>
        <div class= "button-container">
        <button type="submit" class="btn waves-effect waves-light blue lighten-1">Buscar</button>
        </div>
    </form>
</div>
</div>


    <div class = 'card login-box border-radius 19px' style='max-width: 1300px; margin: 0 auto;  '>
    <table class = 'highlight responsive'>
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
                    <td><?php echo htmlspecialchars($row['cantidad_stock']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="7" class="center"><h4>No se encontraron registros</h4></td>
            </tr>
        <?php endif; ?>
    </table>
</div>
</div>