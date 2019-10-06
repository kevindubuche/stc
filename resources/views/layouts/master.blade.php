
<!DOCTYPE html>
<html>
    <head>  
<style>
@keyframes text{
  0% {color:black;

  }
  30%{
    letter-spacing:8px;
   
  } 
  85%{
    letter-spacing:5px;
  
  }
}

</style>

      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--for CDN-->
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"rel="stylesheet">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
      <!-- Site Metas -->
      <title>Standart Training Center</title>  
      <meta charset="utf-8">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="{{url('logo_STCSBK.png')}}" />
      <link rel="apple-touch-icon" href="{{url('logo_STCSBK.png')}}">

      <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5d90daa8ddd24e0019459cc9&product=inline-share-buttons" async="async"></script>
    </head>
    <body style="background-color:#f2f3f4; padding-top:75px;" >
          <!--start memu-->
          <header class="header ">
             <nav class="megamenu navbar navbar-default navbar-fixed-top"style="padding-bottom:25px;">             
                <div class="container">
                  <div class="navbar-header">    
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" ><img src="{{url('logo_STCSBK.png')}}"  style="float:left;"></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse" style="padding-bottom:1S5px; font-size:11px;">          
                      <ul class="nav navbar-nav" style="float:right;">
                        <li><a href="{{url('home')}}">ACCUEIL</a></li>
                        <li><a class="dropdown dropdown-toggle" data-toggle="dropdown" href="#">CERTIFICATIONS</a>
                                <ul class=" dropdown dropdown-menu" style="font-size:11px;">
                                  <li><a href="{{url('formation')}}">NOS CERTIFICATIONS PROFESSIONNELLES</a></li>
                                  <li><a href="{{url('pourquoi')}}">POURQUOI SE CERTIFIER ?</a></li>
                                </ul>
                        </li>
                        <li><a href="{{url('formation')}}">FORMATIONS</a></li>
                        <li><a href="{{url('actualite')}}">ACTUALITÉS</a></li>
                        <li><a href="{{url('qui')}}">QUI SOMMES-NOUS ?</a></li>
                        <li><a href="{{url('instructeur')}}">NOS INSTRUCTEURS</a></li>
                        <li><a href="{{url('contact')}}">CONTACTEZ-NOUS</a></li>
                      </ul>  
                  </div>
                </div>
              </nav>
           </header>
           <!-- end munu -->
            <div class="container"><!-- start encoser -->
           @yield('uniqueIndex')
           @yield('formulaire')
           @yield('formation')
           @yield('qui')
           @yield('instructeur')
           @yield('contact')
           @yield('actualite')
           @yield('login')
           @yield('editionActu')

           <div class="row" ><!-- start footer -->
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <footer class=" row page-footer font-small blue-grey lighten-5" style="margin-top:150px; background-color:#4a4e50; color:white;">     
                   <div class="container"style="background-color: #21d192;">
                      <h6 class="mb-0">Vous pouvez nous contacter à tout moment !</h6>     
                   </div>
                   <!-- Footer Links -->
                   <div class=" row container text-center ">
                        <!-- Grid row -->
                        <div class=" col-lg-offset-3    col-md-9 col-lg-9 col-xs-12  ">
                              <!-- Grid column -->                                      
                              <div class="col-md-4 col-lg-3 col-xs-4">
                                    <!-- Content -->
                                    <h3 class="text-uppercase font-weight-bold">STC</h3>
                                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                    <p> Choisissez <strong>Standart Training Center</strong> pour développer vos compétences et partager les meilleures pratiques</p>
                              </div>                        
                              <!-- Grid column -->
                              <div class="col-md-4 col-lg-3 col-xs-4 ">
                                  <!-- Links -->
                                  <h6 class="text-uppercase font-weight-bold">Produits</h6>
                                  <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                  <p> <a class="dark-grey-text" href="{{url('home')}}">Accueil</a> </p>
                                  <p> <a class="dark-grey-text" href="{{url('formation')}}">Formations</a> </p>
                                  <p> <a class="dark-grey-text" href="{{url('actualite')}}">Actualités</a></p>
                                  <p> <a class="dark-grey-text" href="{{url('formation')}}">Reservation</a></p>
                                  <p> <a class="dark-grey-text" href="{{url('contact')}}">Contactez-nous</a> </p>
                              </div>
                              <!-- Grid column -->
                              <div class="col-md-4 col-lg-3 col-xs-4 ">
                                  <!-- Links -->
                                  <h6 class="text-uppercase font-weight-bold">Contact</h6>
                                  <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                                  <p> <i class="fas fa-home mr-3"></i> Delmas, Haiti</p>
                                  <p> <i class="fas fa-envelope mr-3"></i> stc@gmail.com</p>
                                  <p> <i class="fas fa-phone mr-3"></i> + 509 4891 5358</p>
                                  <p> <i class="fas fa-print mr-3"></i> + 509 3463 5232</p>

                                </div>
                        </div>
                    </div>
                    <!-- Copyright -->
                    <div class="footer-copyright text-center text-black-50 py-3">© 2019 Copyright:
                       <a class="dark-grey-text" href="https://stchaiti.com"> stchaiti.com</a> 
                    </div>
                </footer>
             </div>
          </div><!-- end footer -->
        </div><!-- end encloser -->
          <script type="text/javascript" charset="utf8" src="{{ asset('js/bootstrap.min.js') }}"></script>
          <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
          <script type="text/javascript" charset="utf8" src="{{ asset('js/all.js') }}"></script>
          <script type="text/javascript" charset="utf8" src="{{ asset('js/custom.js') }}"></script>

          


          
        
    </body> 
</html>