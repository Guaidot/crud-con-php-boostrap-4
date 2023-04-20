<?php
session_start();
// borrar todas las variables de sesion
session_unset();

// destruir sesion
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta name="description" content="Formulario de login con Bootstrap">
        <meta name="author" content="Parzibyte">
        <title>Inicio de Sesion</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
	<body>
        <main role="main" class="container my-auto">
            <div class="row">
                <div id="login" class="col-lg-4 offset-lg-4 col-md-6 offset-md-3
                    col-12">
                    <h2 style="padding: 12%" class="text-center">Control y Seguimiento</h2>
                    <img class="img-fluid mx-auto d-block rounded"
                        src="índice.png" />
                    <br>
                    <form action='modelo.php' method='post'>
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input id="usuario" name="usuario" class="form-control" type="text" placeholder="USUARIO">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" name="password" class="form-control" type="password" placeholder="CONTRASEÑA">
                        </div>
                        <input type="hidden" name='accion_ingreso' value='ingreso'>
                        <button type="submit" class="btn btn-primary mb-2">
                            Entrar
                        </button> 
                        <?php 
                            if (isset($_GET['ingreso'])){?>
                            <h3>LOS DATOS DE INGRESO NO SON CORRECTOS !!!</h3>
                        <?php } ?>
                        <br>
                        <a href="#">Contraseña olvidada</a>
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>

