<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php include "navbar.php"; ?>
    
    <div class="card" style="background-color:#58FAAC">
        <div class="card-body">
            <h2 class="card-title text-center" style="font-family: 'Dancing Script', cursive;">Bienvenido al mundo magico del nahuatl</h2><br>
            <h2 class="card-title text-center" style="font-family: 'Josefin Sans', sans-serif;">Ven y conocenos aprenderas en nuestros cursos
        acerca del idioma Nahuatl</h2><br>
        </div>
        <div class="row no-gutters">
            <div class="col">
                <img src="public/img/persona.jpg" class="card-img" alt="...">
            </div>
            <div class="col">
                <div class="card-body mt-5">
                    <div class="text-center" href="curso.php"><a button type="submit" class="btn btn-danger btn-block" href="curso.php">Empezar curso</a></div><br>
                    <div class="text-center" href="registro.php"><a button type="submit" class="btn btn-primary btn-block"  href="registro.php">Crear una cuenta</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-4">
    <h5 class="card-header text-center">¿Porque aprender el idioma Nahualt</h5>
        <div class="card-body">
            <p class="card-text">El idioma nahuatl es una lengua materna en Milpa Alta e la cual 
                no se pierda la lengua en la siguiente generacion sino mantenerla para que sea nuestra 
                raiz.</p>
        </div>
    </div>


  <?php include "dependencias.php"; ?>
      
    
  </body>
</html>
