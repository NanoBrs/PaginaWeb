<?php 
    include("conexion.php");
    $con=conectar();
    $id=$_GET['id'];

    $sql="SELECT * FROM usuarios WHERE id='$id'";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mod. de Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Estilo.css">
    <link rel="stylesheet" href="css/fontello.css">
</head>

<body>
<video autoplay="autoplay" loop="loop" muted defaultMuted playsinline  oncontextmenu="return false;"  preload="auto"  id="miVideo">
            <source src="multimedia/GuitarraFondo.mp4" type="video/mp4">
        
            </video>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <header>
            <nav class="navbar navbar-expand-xl navbar-dark bg-black" id="BarNav">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><h1 class="icon-music">NaSeb1</h1></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="QuienSoy.html">¿Quien soy?</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar sesión</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Comentarios.html">Dejar un comentario</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="UsuariosR.php">Comunidad</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
  

        </header>   


        <div class="container-md mt-5">
        <div class="row">
            <div class="col-5">

            </div>

        </div>

        <div class="row">
            
            <div class="col-12 mt-5" style="text-align: center; content-align:center;">
                <div class="container-md mt-5">
                    <table class="table table-striped table-dark">
                        <thead>
                        <h2>Modificación de datos</h2>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Contacto</th>
   
                           
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                                    $resultado= mysqli_query($con,$sql);
                                    while($row=mysqli_fetch_array($resultado)){
                                ?>
                                    <tr>
                                        
                                        <th><input type="text" class="table-item" value="<?php  echo $row['nombre']?>" name="nombre"></th>
                                        <th><input type="text" class="table-item" value="<?php  echo $row['apellidos']?>" name="apellidos"></th>
                                        <th><input type="text" class="table-item" value="<?php  echo $row['edad']?>" name="edad"></th>
                                        <th><input type="text" class="table-item" value="<?php  echo $row['sexo']?>" name="sexo"></th>
                                        <th><input type="text" class="table-item" value="<?php  echo $row['email']?>" name="email"></th>
                                        
                                        
                                <?php 
                                    }
                                ?>
                        </tbody>
                    </table>

                </div>
            </div>


        </div>
    </div>
    
</body>
</html>