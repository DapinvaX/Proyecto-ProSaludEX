<?php

include_once "../php/connection/connection.php"

?>

<!DOCTYPE html>
<html>

<head>
  <title>Inicio</title>

  <!-- Favicon (icono de pestaña) -->
  <link rel="shortcut icon" href="../images/ritmo-cardiaco.png">  

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="width: 100%; background-image: url(https://image.freepik.com/foto-gratis/fondo-abstracto-degradado-azul-turquesa_8087-3920.jpg);	background-position: right bottom;	background-size: cover;	background-repeat: repeat; background-attachment: fixed;"class="">

    <!-- Navbar -->
    <?php 
        include_once("../navbar.html")
    ?>
    
    <div id="divSuperior" class="py-5 text-center">
        <div class="container">
        </div>
    </div>
    <div id="divCentral" class="py-5 text-center">
                    
                    

                    <!-- Imagenes Carrusel 
                
                        <img src="https://www.seguroscatalanaoccidente.com/content/published/api/v1.1/assets/CONTF7BB24B718C4411AA895371974E15C10/Large?cb=_cache_e3ac&channelToken=219555cd30b54b3bbf0d0d28addf8e10&format=webp" alt="1">
                        <img src="https://www.prosalud.org/imagen/noticias/b55b46e98056859f17b2fe7b996d8459.jpg" alt="2">
                        <img src="https://www.todoparaellas.com/u/fotografias/m/2020/10/31/f800x450-327_51773_5050.jpeg" alt="3">
                -->

                        <!-- Carrusel de ímagenes -->  
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" style="width: 100%;">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                <img src="https://www.prosalud.org/imagen/noticias/b55b46e98056859f17b2fe7b996d8459.jpg" width="100%" alt="1">
                                </div>
                                <div class="carousel-item active">
                                <img src="https://www.todoparaellas.com/u/fotografias/m/2020/10/31/f800x450-327_51773_5050.jpeg" width="100%" alt="1">
                                </div>
                                <div class="carousel-item">
                                <img src="https://www.clarin.com/img/2022/05/17/9Y-zuZRjQ_1256x620__1.jpg" width="100%" alt="1">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                        </div>     
                        
                       <!-- Formularios de inicio sesión y registrar -->
                       <div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Iniciar sesión</h2>
            <form id="login-form" method="post" action="login.php">
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Registro de usuario</h2>
            <form id="register-form" method="post" action="register.php">
                <div class="form-group">
                    <label for="name">Nombre completo</label>
                    <input type="text" class="form-control" id="name" placeholder="Introduce tu nombre completo">
                </div>
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" class="form-control" id="username" placeholder="Introduce tu nombre de usuario">
                </div>
                <div class="form-group">
                    <label for="email">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Introduce tu correo electrónico">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </form>
        </div>
    </div>
</div>
<script>

    $(document).ready(function() {
        // Oculta el formulario de registro de usuario al cargar la página
        $('#register-form').hide();

        // Cuando se hace clic en el botón de "Registro de usuario", muestra el formulario de registro y oculta el formulario de inicio de sesión
        $('#register-button').click(function() {
            $('#login-form').hide();
            $('#register-form').show();
        });

        // Cuando se hace clic en el botón de "Iniciar sesión", muestra el formulario de inicio de sesión y oculta el formulario de registro
        $('#login-button').click(function() {
            $('#register-form').hide();
            $('#login-form').show();
        });

        // Envía los datos del formulario de inicio de sesión utilizando AJAX
        $('#login-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: $(this).serialize(),
                success: function(response) {
                    // Si la autenticación es exitosa, redirige al usuario a la página de inicio
                    // Si la autenticación falla, muestra un mensaje de error
                }
            });
        });

        // Envía los datos del formulario de registro de usuario utilizando AJAX
        $('#register-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'register.php',
                data: $(this).serialize(),
                success: function(response) {
                    // Si el registro es exitoso, muestra un mensaje de éxito y redirige al usuario a la página de inicio
                    // Si el registro falla, muestra un mensaje de error
                }
            });
        });
    });

</script>

    </div>   
   


    
    <div id="divInferior" class="py-5 text-center">
        <div class="container">
        </div>
    </div>
   

    <!-- Footer -->
    <?php
        include("../footer.html")
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>
 
</body>

</html>