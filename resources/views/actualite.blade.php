@extends('layouts\master')

@section('actualite')


           <!-- Carousel1 -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('im.jpg')}}"> 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                        <h1><strong>Standart Training Center</strong></h1>
                                        <h4>ACTUALITES</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->

<div class="container ">
    <div class="row"><!-- strat row -->
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="padding-right:50px;"><!-- start left part -->
        
                    <h5><strong><a class=" glyphicon glyphicon-earphone" style="color:rgba(237,188,27,0.8);"> </a>    +509 3463 5232  | +509 4891 5358</strong></h5>                     
             <hr>              
                    <h5><strong><a class=" glyphicon glyphicon-map-marker" style="color:rgba(237,188,27,0.8);"> </a>    #87, Fermath 67, Haiti W.E.</strong></h5>                               
             <hr>     
                    <h5><strong><a class=" glyphicon glyphicon-envelope" style="color:rgba(237,188,27,0.8);"> </a>    stc@gmail.com</strong></h5>                                   
             <hr>            
                    <h5><strong><a class=" glyphicon glyphicon-time" style="color:rgba(237,188,27,0.8);"> </a>    Tous les jours de 9 heures AM a 3 heures PM</strong></h5>       
            <hr>
                    <img src="{{asset('minibm.jpg')}}" >

         
        
        </div><!-- end left part -->

        <div class="col-lg-8 col-md-8" style="padding-right:20px;"><!-- start middle part -->
        <!--CONTENU DES ACTUS -->
            <div class="jumbotron " style="margin-top:5px;">    
                <h5 style="color:#024292;" class="text-center">TOUTES LES ACTUALITES DES IT   </h5>
                <hr >
                @foreach($allActu as $unActu)
                <h3> <strong> {{$unActu->title}} </strong></h3><br>
                <h6>{{$unActu->date_post}}</h6><br>
                <h4>{{$unActu->content}}</h4><br>

                @endforeach

               </div>
    <hr>
    <!-- FIN CONTENU -->
    
   
    
        </div><!-- end middle part -->

        <div class="col-lg-2 col-md-2"><!-- start right part -->
            <div  style="margin-top:5px; background-color:#dee;">    
                <h5 style="color:#024292;"class="text-center"><strong >Fil d'actualites </strong></h5>
                <hr >
                    @foreach($allActu as $unActu)
                     <ul >
                        <li><a href="{{url('formation')}}"> {{$unActu->title}}</a></li>
                        <hr>
                        <li><a href="{{url('formation')}}"> {{$unActu->title}}</a></li>
                        <hr>
                      </ul>
                      @endforeach 
    <hr><hr>
        </div><!-- end right part -->
    
    </div><!-- end row-->





         









            

               


</div><!-- end container -->






@endsection