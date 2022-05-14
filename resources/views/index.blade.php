<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA E-LEARNING</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="main.js"></script>
   

</head>
<body>
   
<!--header-->



    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark " style="  border-bottom-left-radius:5px; border-bottom-right-radius:5px ">
        <div class="container " >
        
          <a  class="navbar-brand" href="#">
              <img class="logotipo" src=" /images/logo.gif"><b class="ab">Sistema E-learning</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ml-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index" >Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Actividades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/seminarios">Seminarios</a></li>
                  <li><a class="dropdown-item" href="/talleres">Talleres</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="cursos">Cursos</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="http://educa.minedu.gob.bo/">LMS</a></li>
                  <li><a class="dropdown-item" href="manuales">Convenios</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="videos">Videos</a></li>
                </ul>

              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="contactos">Contactos</a>
              </li>
              <li class="zoom">              
                <a  class="navbar-brand" href="https://www.facebook.com/Instituto-de-Investigaci%C3%B3n-Ingenier%C3%ADa-de-Sistemas-UPEA-102303484940743">
                <img class="facebook" src="images/redes1.png"></a>
              
                <a  class="navbar-brand" href="https://api.whatsapp.com/send?phone=75802141&text=Mas%20Informacion">
                    <img class="facebook" src="images/redes2.png"></a>
              
                    <a  class="navbar-brand" href="https://www.youtube.com/channel/UCwPOG5TaTvzroGIIhgpkW1A">
                        <img class="facebook" src="images/redes3.png"></a>

                        <a  class="navbar-brand" href="#">
                            <img class="facebook" src="images/redes4.png">
                          </a>
               </li>

            </ul>
            
            
          </div>
          <div>
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/auth.login') }}" class="text-sm text-gray-700 underline"><button type="btn btn-primary" class="button" style="border-radius: 10px; color: rgb(11, 218, 245); background-color: rgba(15, 15, 19, 0.822);">Acceder</button></a>
                      @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline"><button type="btn btn-primary" class="button" style="border-radius: 10px; color: rgb(11, 218, 245); background-color: rgba(15, 15, 19, 0.822);">Acceder</button></a>
                       
                        @if (Route::has('register'))
                             @endif
                    @endauth
                </div>
            @endif
          </div>
       
        
    </div>
      </nav>
    <!--header-->

    <!--SLIDER-->

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/fondo1.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="animate__animated animate__backInLeft animate__slow-1s" style=" font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:inherit;font-weight: 800;color: rgb(243, 237, 237); background-color:  rgba(57, 57, 58, 0.452); font-size: 50px;">Equipo de Investigacion</h3>
            <p  class="animate__animated animate__flip animate__slow-2s"  style=" font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:inherit;font-weight: 400;color: rgb(247, 244, 244); font-size: 20px;" >Ingeniería de Sistemas</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/fondo8.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="animate__animated animate__backInUp animate__slow-1s" style=" font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:inherit;font-weight: 800;color: rgb(243, 237, 237); background-color:  rgba(57, 57, 58, 0.452); font-size: 50px;">Convenios Institucionales</h3>
            <p class="animate__animated animate__flip animate__slow-1s"  style=" font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:inherit;font-weight: 400;color: rgb(247, 244, 244); font-size: 20px;" >Realizados</p>
          
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/fondo7.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h3 class="animate__animated animate__fadeInTopLeft animate__slow-1s"  style=" font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:inherit;font-weight: 800;color: rgb(243, 237, 237); background-color:  rgba(57, 57, 58, 0.452); font-size: 50px;">Apoyando a la Educacion</h3>
            <p  class="animate__animated animate__flip animate__slow-1s" style=" font-family:Verdana, Geneva, Tahoma, sans-serif; font-style:inherit;font-weight: 400;color: rgb(247, 244, 244); font-size: 20px;" >Virtual</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
      <br>
      <div class="h2" style="color: rgb(179, 179, 179); text-align: center ;">
        
        <H2>DATOS</H2>
        <H2>INTEGRANTES DEL PROYECTO</H2>
      </div>
      <div class=" row col-sm-12"  >
    
        <div class=" animate__animated animate__fadeInDown animate__delay-2s col-md-6 col-sm-12 "  >
             <div style="text-align: center" >
                   <img  width="100px" heigth="100px" src="images/ing.png">
                    <h3>ING WILLIAM ROQUE</h3>
                    <p>Docente Investigador</p>
                     <a  clase="neon" href="contactos"><button style="background: rgb(38, 38, 39); border-radius: 5px;"><p style= "color: cornsilk; margin: 5px;">SABER MAS</p></button> </a>
              </div>
 
        </div>
        

       <div class=" animate__animated animate__fadeInDown animate__delay-2s col-md-6  col-sm-12 "  >
              <div style="text-align: center" >
                  <img  width="100px" heigth="90px" src="images/ivana.png">
                  <h3>AUX.INV. IVANA LAZARTE</h3>
                  <p> Auxiliar de Investigacion</p>
                  <a href="contactos"><button style="background: rgb(38, 38, 39); border-radius: 5px;"><p style= "color: cornsilk; margin: 5px;">SABER MAS</p>  </button></a></div>
               </div>
   
       </div>
   </div>

 


    
      
     <!-- Footer -->
     
      
     <!-- Footer -->
     <footer class="page-footer font-small indigo">
      
      <!-- Footer Links -->
      <div class="container text-center text-md-left footer-ivana">
    
        <!-- Grid row -->
        <div class="row">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
           
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Información de Contacto</h5>
    
            <ul class="list-unstyled lista-span">
              <li>
                <a href="#!"><i class="fa fa-phone icon"></i><span>75802141</span></a>
              </li>
              <li>
               <a href="#!"><i class="fa fa-envelope  icon"></i><span>william@gmail.com</span></a>
               <a href="#!"><i class="fa fa-envelope  icon"></i><span>ivanalazarte@gmail.com</span></a>
              </li>
              <li>
               <a href="http://sysele.byethost32.com/"><i class="fa fa-link  icon"></i><span>http://sysele.byethost32.com/</span></a>
              </li>
              <li>
               <a href="#!"><i class="fa fa-map-marker icon"></i><span>La Paz-El Alto</span></a>
              </li>
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 ubicacion"><span>Ubicación</span></h5>
    
            <ul class="list-unstyled">
              <li>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d489643.7559271211!2d-68.213268!3d-16.508831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edef5765e7953%3A0xb5f33fe05c975d9d!2sVilla%20Adela%2C%20El%20Alto%2C%20Bolivia!5e0!3m2!1ses-419!2sus!4v1604894301771!5m2!1ses-419!2sus" width="150" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </li>
            
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">HORAS DE ATENCIÓN</h5>
    
            <ul class="list-unstyled">
              <li>
                <p>Lunes a Viernes<br> 08:30 – 14:00</p>
                </li>
              <li>
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">SERVICIOS</h5>
                <a href="desarrollo-sistemas.html">Seminarios</a>
              </li>
              <li>
                <a href="talleres">Talleres</a>
              </li>
              <li>
                <a href="cursos">Cursos</a>
              </li>
              <li>
                <a href="manuales">Convenios</a>
              </li>
              <li>
                <a href="videos">Videos</a>
              </li>
            </ul>
              </li>
        
            </ul>
    
          </div>
          <!-- Grid column -->
    
          <hr class="clearfix w-100 d-md-none">
    
          <!-- Grid column -->
          <div class="col-md-3 mx-auto">
    
            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">SISTEMA E-LEARNING</h5>
    
            <ul class="list-unstyled">
              <li>
                <a href="/index">Inicio</a>
              </li>
              <li>
                <a href='/cursos'>Actividades</a>
              </li>
              <li>
                <a href='/videos'>Productos</a>
              </li>
              <li>
                <a href='/contactos'>Contactos</a>
              </li>
            </ul>
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CODIGO QR</h5>
            <div class="qr" id="qrcode">
           <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=http%3A%2F%2Fsysele.byethost32.com%2F&s=6&e=m" alt="Generador de Códigos QR Codes"/>
           <br/><a href="https://www.codigos-qr.com/en/qr-code-generator/" target="_blank" id"qrgenerator"></a>
            </div>

          </div>
          <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
      </div>
      <!-- Footer Links -->
    
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">
        <a href="#"> © 2021 Copyright:  Dev Ivana Lazarte</a>
        
      </div>
      <!-- Copyright -->
    
    </footer>
    <!-- Footer -->
     
     </section>
     
     <script src= "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
          
       
     
</body>
   </html>

