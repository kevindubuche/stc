@extends('layouts/master')

@section('formulaire')
        <!-- end menu -->
          <!-- Carousel1 -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('formation.jpg')}}"> 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                        <h1><strong>Standart Training Center</strong></h1>
                                        <h4>RESERVATION</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->

            <div class="container">
            
             <div class="row" style="background-color:#eee; box-shadow:2px 2px 3px; border-radius:16px;" >
                <section class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-4  col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                  
                <form action="{{url('reservation')}}" method="POST">
               @csrf<!-- {{csrf_field()}} -->
               
                  <div class="form-group has-feedback">
                         <label for="nom_user">Votre nom :</label>
                         <input type="text" class="form-control"  id="nom_user"name="nom_user"  placeholder="Pierre" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="prenom_user">Votre prenom :</label>
                         <input type="text" class="form-control"  id="prenom_user"name="prenom_user"  placeholder="Patrick" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="adresse">Votre adresse :</label>
                         <input type="text" class="form-control"  id="adresse"name="adresse"  placeholder="#41, Delmas 33, Haiti" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="email_user">Votre email :</label>
                         <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="telephone">Votre numero de telephone :</label>
                         <input type="text" class="form-control"  id="telephone"name="telephone"  placeholder="+509 37283456" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="date">La date de reservation pour le cours :</label>
                         <input type="date" class="form-control datepicker"  id="date_cours"name="date_cours"  placeholder="+509 37283456" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-time form-control-feedback"></span>
                          
                    </div>
                  
                   <div class="form-group has-feedback">
                      <input type="hidden" name="id_cours" value="{{$idDuCours}}" >
                      <div class="row">
                      <button class='btn btn-primary'type=" button" style='border-radius:50px;'>Reserver</button>                   
                     </div>
</div>


              </form>
               
               
                </section>     
             </div>


            

            


             
            

           
                       

            <hr class="hr3"> 







<!-- end col-3______________________________________________________________________________________________________ -->


@include('layouts.partials._choixPartial')



<!-- end ______________________________________________________________________________________________________ -->


    </div>      

           

@endsection