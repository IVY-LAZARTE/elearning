<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminarios</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/social.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>

<!--header-->


<nav class=" navbar navbar-expand-lg navbar-dark bg-dark " style=" display:inline-block;position:fixed ;z-index:1000; width:100%;max-width:1000px;  border-bottom-left-radius:5px; border-bottom-right-radius:5px ">
      
        <div class="container">
        
          <a  class="navbar-brand" href="#">
              <img class="logotipo" src="images/logo.gif"><b class="ab">Sistema E-learning</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ml-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Actividades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class=" dropdown-item active" href="seminarios">Seminarios</a></li>
                  <li><a class="dropdown-item" href="talleres">Talleres</a></li>
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
                  <li><a class="dropdown-item" href="manuales">Manuales</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Videos</a></li>
                </ul>

              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Contactos</a>
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





    
       
    <!-- Footer -->
<footer class="page-footer font-small indigo">
    
    <!-- Footer Links -->
    <div class="container text-center text-md-left footer-ivana">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
  
          <!-- Links -->
          <a href="#!"><img src="images/FFGG.PNG" width="200%" alt=""></a>
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Información de Contacto</h5>
  
          <ul class="list-unstyled lista-span">
            <li>
              <a href="#!"><i class="fa fa-phone icon"></i><span>75802141</span></a>
            </li>
            <li>
             <a href="#!"><i class="fa fa-envelope  icon"></i><span>desarrollo@gmail.com</span></a>
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
          <h5 style="color: blanchedalmond;" class="font-weight-bold text-uppercase mt-3 mb-4 ubicacion"><span>Ubicación</span></h5>
  
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
              <p>Lunes a Viernes<br> 09:00 – 14:30 </p>
            </li>
            <li>
               <h5 class="font-weight-bold text-uppercase mt-3 mb-4">HORAS DE ATENCIÓN</h5>
                <ul class="list-unstyled">
            <li>
              <a href="desarrollo-sistemas.html">Actividades</a>
            </li>
            <li>
              <a href=diseno-web.html>Productos</a>
            </li>
            <li>
              <a href="marketing-digital.html">Contactos</a>
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
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Sistema E-learning</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="index.html">Inicio</a>
            </li>
            <li>
              <a href="nosotros.html">Actividades</a>
            </li>
            <li>
              <a href="#!">Productos</a>
            </li>
            <li>
              <a href="contactos.html">Contactos</a>
            </li>
          </ul>
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">IIIS</h5>
          <a href="#!"><img src="images/logo.gif" width="60%" alt=""></a>
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    
    
    
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="https://https://cibertel-srl.com/ /"> Desarrollado por Dev Ivana Lazarte</a>
      
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
       
     
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
     <script src="js/bootstrap.min.js"></script>
       

</body>

</html>