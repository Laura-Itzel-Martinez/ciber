<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style1.css">
    <title>registro usuario </title>
  </head>
  <body>

    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg">
                    <div class="card-body p-4">
                    <div class="text-center">
                    <div class="h1 fw-light">Crea tu nueva cuenta</div>
                </div>
                <form action="servidor/registroUsuario.php" method="POST">
                                
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                    

                    <label for="apaterno">Apellido paterno</label>
                    <input type="text" class="form-control" name="apaterno" id="apaterno">
                            
                    <label for="amaterno">Apellido Materno</label>
                    <input type="text" class="form-control" name="amaterno" id="amaterno">

                    <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option values=>Selecciona tu sexo</option>
                            <option values="femenino">Femenino </option>
                            <option values="masculino">Masculino </option>
                        </select> 
                            
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">

                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email"> 

                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario"> 

                    <label for="password">password</label>
                    <input type="text" class="form-control" name="password" id="password"> 

                    <br>
                    <hr>
                    <button class="btn btn-lg btn-primary btn-block text-uppercase">Registrar</button>
                </form>
                <br>
                <a href="index.php" class="btn btn-lg btn-info btn-block text-uppercase">Entrar</a>
            </div>
        </div>
    </div> 
    
    <?php include "dependencias.php"; ?>
    </body>
</html>


