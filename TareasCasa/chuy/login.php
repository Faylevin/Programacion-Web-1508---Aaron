<?php
session_start();
include './header.php';
include './logica/conexion.php';
?>

<style>
    .login-box {
        border-radius: 15px;
        border: 1px solid black;
        z-index: 1;
        padding: 50px

    }

    .bodyco {
        background: rgb(14,65,143);
        background: linear-gradient(90deg, rgba(14,65,143,1) 0%, rgba(137,182,252,1) 50%, rgba(14,65,143,1) 100%); z-index: -1;
    }

</style>

<body class="bodyco">
<div class="">
    <div class="row" style="">
        <div class="col s16 m6 offset-m3">
            <div class="card login-box border-radius 19px">
                <div class="card-content">
                    <h4 class="center"><span>Ingresa tus Datos</span></h4>

                    <form action="logica\validaLogin.php" method="POST">

                    <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="usuario"></label> <!-- no funciona los input-field-->
                    <input type="text" placeholder="Usuario" name="usuario" requiredclass="form-control" id="usuario" autofocus>
                    </div>


                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <label for="password"></label>
                        <input type="password" placeholder="Contraseña" name="password" requiredclass="form-control" id="password">
                    </div>

                        <button type="submit" class="btn-large waves-effect waves-light blue lighten-1  border-radius: 25px;">Iniciar Sesión</button>
                        <a class='btn-large waves-effect waves-light red lighten-1' href='index.php'>Salir</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
