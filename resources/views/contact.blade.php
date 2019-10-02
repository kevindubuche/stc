@extends('layouts/master')

@section('contact')

           <!-- Carousel1 -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('cont.jpg')}}"> 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                        
                                        <h4>CONTACTEZ-NOUS</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->
<div class="container ">

<div class="jumbotron text-center" style="margin-top:10px;">    
            <h5 style="color:#024292;">MERCI DE CHOISIR STANDART TRAINING CENTER </h5>
            <hr >
            <h6>La STC est a votre disposition en ce qui concerne le training pour les certifications et pour consultation<br>
            Si vous avez des questions ou des commentaires, veillez nous contacter ou visitez nous a notre addresse.</h6>
            </div>
<hr><hr>     


      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                    <h5><strong><a class=" glyphicon glyphicon-earphone" style="color:rgba(237,188,27,0.8);"> </a>    +509 3463 5232  | +509 4891 5358</strong></h5>                     
             <hr>              
                    <h5><strong><a class=" glyphicon glyphicon-map-marker" style="color:rgba(237,188,27,0.8);"> </a>    #87, Fermath 67, Haiti W.E.</strong></h5>                               
             <hr>     
                    <h5><strong><a class=" glyphicon glyphicon-envelope" style="color:rgba(237,188,27,0.8);"> </a>    beteetmechant@gmail.com</strong></h5>                                   
             <hr>            
                    <h5><strong><a class=" glyphicon glyphicon-time" style="color:rgba(237,188,27,0.8);"> </a>    Tous les jours de 9 heures AM à 3 heures PM</strong></h5>       
            <hr>
                    <img src="{{asset('tibm.jpg')}}">

         </div>

         <div class="col-lg-offset-1 col-md-offset-1  col-lg-7 col-md-7 col-sm-12 col-xs-12 jumbotron" >

         <form action="{{url('commentaire')}}" method="POST">
               @csrf<!-- {{csrf_field()}} -->
               
                  <div class="form-group has-feedback">
                         <label for="nom_user">Nom :</label>
                         <input type="text" class="form-control"  id="nom_user"name="nom_user"  placeholder="Nom complet" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="email_user">Email :</label>
                         <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="telephone">Téléphone :</label>
                         <input type="text" class="form-control"  id="telephone"name="telephone"  placeholder="+509 37283456" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label >Questions ou commentaires</label>
                         <textarea  class="form-control"  id="textarea" name="textarea" placeholder="Questions ou commentaires" required="required" style="height:150px;"></textarea>  
                    </div>

                  
                   <div class="form-group has-feedback">            
                      <div class="row">
                      <button class='btn btn-primary'type=" button" style='border-radius:50px;'>Soumettre</button>                   
                     </div>
</div>


              </form>

        </div>
     </div>

            
@include('layouts.partials._choixPartial')




@endsection