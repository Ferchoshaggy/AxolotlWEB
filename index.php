<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluir jQuery -->
     <title>AXOLOTL SOFTWARE</title>
     <link rel="shortcut icon" href="img/LOGO AXOLOTL 123.png" type="image/x-icon">

     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Golos+Text&display=swap" rel="stylesheet">


     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
     integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
     integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

 <header>
    <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
        <h1 class="logo">AXOLOTL SOFTWARE</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contacto">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 </header>

 <section class="inicio" id="inicio">
    <section class="textos-header">
        <img src="img/LOGO AXOLOTL redes.png" width="200" height="200">
        <h1>AXOLOTL SOFTWARE</h1>
        <H2>Herramientas a la medida de tus necesidades</H2>
    </section>
    <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C146.44,175.97 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #ffffff;"></path>
        </svg></div>
</section>

<div class="container">
<section class="resumen">
    <h3> Tenemos para ti</h3>
    <p>El desarrollo de software a medida para pequeñas, medianas y grandes
        empresas que requieren de una actualización y optimización de procesos que pueden llevar a un
        nuevo estándar a la empresa sin perdidas en el proceso.</p>
</section>
</div>

<div class="container">
<section class="nosotros" id="nosotros">

    <div class="card-body secciones_body">
        <div class="row">

            <div class="col-md-6">
    <div class="textoswe">
        <h1>Optimiza tu negocio sin </h1>
        <h1>perdidas en el camino </h1>
        <h2>Todo lo que necesitas </h2>
        <h2>en un solo lugar</h2>

        <button type="button" class="comenzar btn" data-bs-toggle="modal" data-bs-target="#ModalNosotros">
            <span>Comenzar ahora</span>
        </button>

        <!-- Modal -->
<div class="modal fade" id="ModalNosotros" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="/Php/procesoDeDatos.php" method="POST" class="formData">  
      <div class="modal-content">   
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Cuentanos</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card-body secciones_body">
                <div class="row">
           <div class="mb-3"><input class="form-control campo" type="text" name="nombre" required placeholder="Tu nombre o el de tu empresa"></div>
           <div class="mb-3"> <input class="form-control campo" type="email" name="correo" required placeholder="E-mail"></div>
           <div class="mb-3"><input class="form-control campo" type="tel" name="telefono"  pattern="[0-9]{12}" required placeholder="Telefono de contacto"></div>
           <div class="mb-3"><textarea class="form-control campo" name="mensaje" placeholder="Dejanos un mensaje"></textarea></div>
</div>
</div>
        </div>
        <div class="modal-footer">
            <button class="enviarForm btn" type="submit">
                <span>
                    Enviar
                </span>
    
            </button>
        </div>
      </div>
    </form>  
    </div>
  </div>
    </div>
</div>

<div class="col-md-6">
    <img src="img/desarrollo.png" class="imagenwe img-fluid" alt="Responsive image">
</div>
</div>
</div>

</section>
</div>

<div class="container">
    <section class="servicios" id="servicios">
        <div class="card-body secciones_body">
            <div class="row">
                <div class="col-md-6">
                    <div class="video">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/eyCXSOkZukI?autoplay=0&mute=0&controls=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="textoser">
                        <h2>Justo lo que necesitas</h2>
                        <h2>a un clic de distancia</h2>
                        <h1>¡Adelante!</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="wavedos">
    <div class="wave2" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150"
            preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C165.06,-41.11 366.53,176.95 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill: #0d1117;"></path>
        </svg></div>
</section>

<section class="servicios2">
    <h1>Como iniciar</h1>

    <div class="container">
    <section class="uno">
        <div class="card-body secciones_body">
            <div class="row">
                <div class="col-md-6">
                    <div class="unouno">
                        <h2>Cuentanos tu idea o tus necesidades </h2>
                        <h1>Cuales son los problemas administrativos que tiene tu empresa o negocio<br>o te gustaria tener tu
                            propia pagina web </h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/idea.png" alt="" class="idea img-fluid">
                </div>
            </div>
        </div> 
    </section>
    </div>

    <div class="container">
    <section class="dos">
        <div class="card-body secciones_body">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/analisis.png" alt="" class="analisis img-fluid">
                </div>
                <div class="col-md-6">
                    <section class="dosdos">
                        <h2>Analisis de la informacion</h2>
                        <h1>Nuestro equipo de expertos analizara tu informacion con el fin de hacerte<br>una propuesta que
                            cumpla con tus expectativas y necesidades</h1>
                    </section> 
                </div>
            </div>
        </div>   
    </section>
    </div>

    <div class="container">
    <section class="tres">
        <div class="card-body secciones_body">
            <div class="row">
                <div class="col-md-6">
                    <div class="trestres">
                        <h2>Retroalimentacion </h2>
                        <h1>Uno de nustros expertos se comunicara contigo para darte solucion<br>brindandote datos como
                            cotizacion, tiempo de desarrollo
                            y todos los acuerdo <br> necesarios para iniciar con tu proyecto </h1>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="img/retro.png" alt="" class="retro img-fluid">
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container">
    <section class="cuatro">
        <div class="cuatrocuatro">
            <h2>Dejanoslo a nostros y comencemos</h2>
            <img src="img/uno.png" alt="" class="comencemos img-fluid">
        </div>
    </section>
</div>

    <section class="cinco">
        <button class="comenzar2 btn">
            <span>¡Comencemos!</span>
        </button>
        <button class="comenzar2 btn">
            <span>¿Tienes dudas?</span>
        </button>
    </section>

</section>

<!-- -->

<div class="container">
    <section class="tecnologias">
        <h1>Algunas de las tecnologias que trabajamos para ti:</h1>
        <div class="slider">
            <div class="slide-track">
                <div class="slide"><img src="img/AI.png" alt="">
                </div>
                <div class="slide"><img src="img/AJAX.png" alt="">
                </div>
                <div class="slide"><img src="img/ANGULAR.png" alt="">
                </div>
                <div class="slide"><img src="img/css.png" alt="">
                </div>
                <div class="slide"><img src="img/FIGMA.png" alt="">
                </div>
                <div class="slide"><img src="img/html.png" alt="">
                </div>
                <div class="slide"><img src="img/js.png" alt="">
                </div>
                <div class="slide"><img src="img/LARAVEL.png" alt="">
                </div>
                <div class="slide"><img src="img/node.png" alt="">
                </div>
                <div class="slide"><img src="img/php.png" alt="">
                </div>
                <div class="slide"><img src="img/PS.png" alt="">
                </div>
                <div class="slide"><img src="img/REAC.png" alt="">
                </div>
                <div class="slide"><img src="img/SQL.png" alt="">
                </div>
                <div class="slide"><img src="img/XD.png" alt="">
                </div>
                <div class="slide"><img src="img/AI.png" alt="">
                </div>
                <div class="slide"><img src="img/AJAX.png" alt="">
                </div>
                <div class="slide"><img src="img/ANGULAR.png" alt="">
                </div>
                <div class="slide"><img src="img/css.png" alt="">
                </div>
                <div class="slide"><img src="img/FIGMA.png" alt="">
                </div>
                <div class="slide"><img src="img/html.png" alt="">
                </div>
                <div class="slide"><img src="img/js.png" alt="">
                </div>
                <div class="slide"><img src="img/LARAVEL.png" alt="">
                </div>
                <div class="slide"><img src="img/node.png" alt="">
                </div>
                <div class="slide"><img src="img/php.png" alt="">
                </div>
                <div class="slide"><img src="img/PS.png" alt="">
                </div>
                <div class="slide"><img src="img/REAC.png" alt="">
                </div>
                <div class="slide"><img src="img/SQL.png" alt="">
                </div>
                <div class="slide"><img src="img/XD.png" alt="">
                </div>
            </div>
        </div>

    </section>
</div>

<div class="container">
<section class="contacto" id="contacto">
    <div class="card-body secciones_body">
        <div class="row">
            <div class="col-md-7">
                <div class="form">
                    <h2>Contacto</h2>
                    <p>Somos una consultoría emergente de desarrollo web, 
                     apasionados por la creación de soluciones digitales innovadoras para empresas
                     de todos los tamaños. Con un equipo entusiasta de desarrolladores web talentosos, 
                     nos especializamos en ofrecer servicios de consultoría personalizados para ayudar a nuestros clientes a 
                     aprovechar al máximo su presencia en línea. Desde el diseño inicial hasta la implementación y el soporte continuo, 
                     estamos comprometidos a ofrecer soluciones de desarrollo web de alta calidad que impulsen el éxito de nuestros clientes
                     en el mundo digital. En este emocionante viaje de crecimiento, estamos listos para colaborar 
                     contigo y hacer realidad tus ideas digitales.</p>
                    <a href="https://api.whatsapp.com/send?phone=5518661093"><i class="bi bi-whatsapp"></i>
                        5518661093</a>
                    <a href="mailto:axolotlsoftware.dev@gmail.com"><i class="bi bi-envelope-at"></i>
                        axolotlsoftware.dev@gmail.com</a>
                </div>
            </div>
            <div class="col-md-5">
                <form action="/Php/procesoDeDatos.php" method="post" class="formData">
                    <input type="text" name="nombre" required placeholder="Tu nombre o el de tu empresa" class="campo form-control">
                    <input type="email" name="correo" required placeholder="E-mail" class="campo form-control">
                    <input type="tel" name="telefono" required placeholder="Telefono de contacto"  pattern="[0-9]{12}" class="campo form-control">
                    <textarea name="mensaje" placeholder="Dejanos un mensaje" class="campo form-control"></textarea>
                    <button class="enviar btn" type="submit" style="width: 100%;">
                        <span style="width: 100%;">
                            Enviar
                        </span>
            
                    </button>
                </form>
            </div>
        </div>
    </div>

</section>

<footer>

</footer>
</div>
<script type="text/javascript">
      window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("abajo", window.scrollY > 0);
        })
</script>
<script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>   

<script>
$(document).ready(function(){
    $('.formData').submit(function(event) {
        event.preventDefault(); // Prevenir el envío normal del formulario
        
        // Obtener los datos del formulario
        var formData = $(this).serialize();
        
        // Enviar la solicitud AJAX
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData,
            success: function(response) {
               alert("Formulario enviado con exito");
               $('.formData').trigger('reset');
                
    
            },
            error: function(xhr, status, error) {
                // Mostrar un mensaje de error si la solicitud no fue exitosa
                console.error('Error al enviar el formulario');
            }
        });
    });
});
</script>

</body>
</html>