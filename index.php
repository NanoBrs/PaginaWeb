<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title> Músico Naseb1</title>
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
        <!-- A grey horizontal navbar that becomes vertical on small screens -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/banner4.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <section id="slider"> 
                            
                            <div class="contenedor">
                                <h2>Musica independiente para ti</h2>
                                <p>¿Ya me conoces?</p>
                                <a class="btn btn-primary" href="QuienSoy.html" role="button">Leer más</a>
            
            
                            </div>
            
            
                        </section>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner2hg.jpg" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <section id="slider"> 
                            
                            <div class="contenedor">
                                <h2>Unete a la comunidad</h2>
                                <p>¿Te animas a formar parte?</p>
                                <a class="btn btn-primary" href="registro.html" role="button">Unirme</a>
            
            
                            </div>
            
            
                        </section>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/banner-5 (1).jpg" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <section id="slider"> 
                            
                            <div class="contenedor">
                                <h2>Danos tu opinión</h2>
                                <p>Tus comentarios siempre son un gran aporte</p>
                                <a class="btn btn-primary" href="Comentarios.html" role="button">Vamos</a>
                                
                                
            
                            </div>
            
            
                        </section>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
        
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
                        <a class="nav-link" href="index.php">Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="QuienSoy.html">¿Quien soy?</a>
                      </li>
 
                      <li class="nav-item">
                        <a class="nav-link" href="Comentarios.html">Dejar un comentario</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="UsuariosR.php">Administración</a>
                      </li>
                    </ul>
                    <div class=" border">
                        <a class="nav-link " href="login.php">Iniciar sesión </a>
                    </div>
                        
                    
                        
                    
                  </div>
                </div>
              </nav>
  

        </header> 
    
        
        <main>
            <div class="container-sm">
                <div class="row">
                    <div class="col-12 col-lg-4 mt-4 my-lg-4">
                        <div id="Reproductor">
                            <div class="player">
                                <div class="imgBx">
                                    <img src="img/Acto de amor (7).png" alt="">
                                </div>
                                <audio controls >
                                    <source src="multimedia/ActoDeAMor.mp3" type="audio/mp3">  
                                </audio>
                    
                            </div>
                            
            
                        </div>

                    </div>

                    <div id="Texto" class="col-11 col-lg-7 mt-4 my-lg-4">
                        <h3 class=>Acto de amor</h3>
                        <h3 class="h5">Naseb1 & Emilia Rojas</h3>
                        <p class="text-white p-2">Lorem ipsum dolor sitamet consectet
                            ur, adipisicing elit. Asperiores ea
                            rum non officia unde iusto quam qu
                            os nulla, in soluta ipsam delectus
                             nisi est optio amet similique doloremque labore obcaecati recusandae.
                        </p>
                        <p class="text-white p-2">Lorem ipsum dolor sitamet consectet
                            ur, adipisicing elit. Asperiores ea
                            rum non officia unde iusto quam qu
                            os nulla, in soluta ipsam delectus
                             nisi est optio amet similique doloremque labore obcaecati recusandae.
                        </p>
                    </div>

                </div>

                <div class="row">
                    <div id="Texto" class="col-11 col-lg-7 mt-4 my-lg-4">
                        <h3 class=>ViejoHogar</h3>
                        <h3 class="h5">Naseb1</h3>
                        <p class="text-white p-2">Lorem ipsum dolor sitamet consectet
                            ur, adipisicing elit. Asperiores ea
                            rum non officia unde iusto quam qu
                            os nulla, in soluta ipsam delectus
                             nisi est optio amet similique doloremque labore obcaecati recusandae.
                        </p>
                        <p class="text-white p-2">Lorem ipsum dolor sitamet consectet
                            ur, adipisicing elit. Asperiores ea
                            rum non officia unde iusto quam qu
                            os nulla, in soluta ipsam delectus
                             nisi est optio amet similique doloremque labore obcaecati recusandae.
                        </p>
                    </div>

                    <div class="col-12 col-lg-4 mt-4 my-lg-4">
                        <div id="Reproductor">
                            <div class="player">
                                <div class="imgBx">
                                    <img src="https://i.scdn.co/image/ab67616d0000b273c5c5709f9c252ce5913a07e5" alt="">
                                </div>
                                <audio controls >
                                    <source src="multimedia/ViejoHogar.mp3" type="audio/mp3">  
                                </audio>
                    
                            </div>
                            
            
                        </div>

                    </div>

                    

                </div>
            </div>


            
            

            

            <div id="Novedad" class="container-fluid">
           
                <h2>Proximas Presentaciones</h2>


            </div>
            
            <div class="container-md">
                <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Horario</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">12/11/2021</th>
                        <td>Concepción</td>
                        <td>Calle siempre viva 777</td>
                        <td>Por definir</td>
                      </tr>
                      <tr>
                        <th scope="row">23/11/2021</th>
                        <td>La Serena</td>
                        <td>Cuatro Esquinas #2323</td>
                        <td>Por Definir</td>
                      </tr>
                      <tr>
                        <th scope="row">07/12/2021</th>
                        <td>Copiapó
                        </td>
                        <td>La alameda #441</td>
                        <td>21:00 hrs</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
            
            <div id="Contacto" class="container-sm mb-4 p-5 rounded-3" style="background-color: var(--BgMain);" >
                <form action="InsertarC.php" method="post">
                    <h2>Contacto rapido</h2>
                    <div class="form-group">
                      <label class="text-white" for="exampleInputEmail1">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group ">
                        <label class="text-white" for="exampleInputEmail1">Apellidos</label>
                        <input name="apellidos" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su apellido">
                      </div>
                    <div class="form-group ">
                        <label class="text-white" for="exampleInputEmail1">RUT/DNI</label>
                        <input name="rut" type="num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese RUT/DNI">
                      </div>
                    <div class="form-group ">
                        <label class="text-white" for="exampleInputEmail1">Correo Electronico</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su correo electronico">
                    </div>
                    <div class="form-group ">
                        <label class="text-white" for="exampleInputEmail1">Dirección</label>
                        <input name="direccion" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese dirección">
                    </div>
                    <div class="form-group ">
                        <label class="text-white" for="Sexo">Sexo:</label>
                        <p class="Sexo2"><input  type="radio" id="Sexo" value="Masculino" name="sexo">Masculino </p>
                        <p class="Sexo2"><input  type="radio" id="Sexo" value="Femenino" name="sexo">Femenino</p>
                        <p class="Sexo2"><input  type="radio" id="Sexo" value="Otro" name="sexo">Otro</p>
                    </div>
                    
                    <div class="form-group ">
                        <label class="text-white" for="exampleInputEmail1">Fecha de Nacimiento</label>
                        <input name="fecha_nac" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese correo">
                    </div>
                    
                    <div class="form-group m-2">
                        <label class="text-white" for="exampleInputEmail1">Edad: </label>
                        <input class="Entradas" placeholder="Edad" type="number" name="edad" min="12" max="110">
                    </div>
                    <div class="form-group pb-2">
                        <label class="text-white" for="exampleInputEmail1">Motivo</label>
                        <select name="Motivo" class="form-control ">
                            <option name="Motivo" value="Demanda Civil">Demanda Civil</option>
                            
                            <option name="Motivo" value="Colaboración Musical">Colaboración Musical</option>

                            <option name="Motivo" value="Otros">Otros </option>
                          </select>
                      </div>
        
                    <button type="submit" class="btn m-2 btn-secondary">Enviar</button>
                  </form>
            </div>
            
           

            


            <section id="plataformas">
                <h3>Puedes escucharme en:</h3>
                <div class="contenedor">

                    <div class="info-plataforma">
                        <a href="">
                            <img src="https://www.wallpapertip.com/wmimgs/17-176153_download-logo-spotify-png.png" alt="spotify">
                            <h4>Spotify</h4>
                        </a>
                    </div>
                    <div class="info-plataforma">
                        <a href="">
                            <img src="http://tusimagenesde.com/wp-content/uploads/2017/07/apple-logo-2.png" alt="apple music">
                            <h4>Apple Music</h4>
                        </a>
                        
                    </div>
                    <div class="info-plataforma">
                        <a href="">
                            <img src="https://logos-marcas.com/wp-content/uploads/2021/03/Deezer-Logo.png" alt="Deezer">
                            <h4>Deezer</h4>
                        </a>
                        
                    </div>
                    <div class="info-plataforma">
                        <a href="">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Amazon_Music_logo.svg/1200px-Amazon_Music_logo.svg.png" alt="Amazon music">
                            <h4>Amazon Music</h4></a>
                    </div>
                </div>

            </section>
            <footer>
                <div id="contenedor">
                    <p class="copy">NaSeb1 V.1 &copy; 2021 <br>Pagina web Programada por Luciano Berrios . Video de fondo proporcionado por AyudaPanel </p>
                    <div class="sociales">
                        <a class="icon-youtube" href=""></a>
                        <a class="icon-instagram-filled" href=""></a>
                        <a class="icon-facebook-squared" href=""></a>
            


                    </div>
                </div>
            </footer>


        </main>


    </body>

</html>