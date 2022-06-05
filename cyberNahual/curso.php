<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
  </head>
  <body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                <h3>Bienvenido usuario</h3>
            </div>

            <div class="card-body">
                <form action="servidor/loginProcesar.php" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="usuario" name="usuario" id="usuario">
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control" placeholder="password" name="password" id="password">
                    </div>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit" >Entrar</button>
                    <a href="registro.php" class="btn btn-lg btn-warning btn-block text-uppercase">Registro</a>
                </form>
            </div>
        </div>
    </div>

    <?php include "dependencias.php"; ?>
  
  </body>
</html>