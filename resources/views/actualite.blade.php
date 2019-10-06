@extends('layouts\master')

@section('actualite')


           <!-- Carousel1 -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('im.jpg')}}"> 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                        
                                        <h4>ACTUALITÉS</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->

<div class="container ">
    <div class="row"><!-- strat row -->
        <div class="col-lg-2 col-md-3 col-sm-2 col-xs-12" style="padding-right:50px;"><!-- start left part -->
        
                    <h5><strong><a class=" glyphicon glyphicon-earphone" style="color:rgba(237,188,27,0.8);"> </a>    +509 3463 5232  | +509 4891 5358</strong></h5>                     
             <hr>              
                    <h5><strong><a class=" glyphicon glyphicon-map-marker" style="color:rgba(237,188,27,0.8);"> </a>    #87, Fermath 67, Haiti W.E.</strong></h5>                               
             <hr>     
                    <h5><strong><a class=" glyphicon glyphicon-envelope" style="color:rgba(237,188,27,0.8);"> </a>    stc@gmail.com</strong></h5>                                   
             <hr>            
                    <h5><strong><a class=" glyphicon glyphicon-time" style="color:rgba(237,188,27,0.8);"> </a>    Tous les jours de 9 heures AM à 3 heures PM</strong></h5>       
            <hr>
                    <img src="{{asset('minibm.jpg')}}" >

         
        
        </div><!-- end left part -->

        <div class="col-lg-7 col-md-7 col-sm-2 col-xs-12" style="padding-right:20px; box-shadow: 1px 1px 1px #348978; border-radius:20px;"><!-- start middle part -->
        <!--CONTENU DES ACTUS -->
            <div class="jumbotron " style="margin-top:5px;">    
                <h5 style="color:#024292;" class="text-center">TOUTES LES ACTUALITÉS DES IT   </h5>
                <hr >
                @foreach($allActu as $unActu)
                <h3> {!! $unActu->title !!} </h3><br>
                <h6>{{$unActu->date_post}}</h6><br>
                <h4>{{substr(strip_tags($unActu->content),0,300)}}
                    {{strlen(strip_tags($unActu->content))>300 ? "...":""}}
                </h4><br>
                <a href="{{url('unActu')}}/{{$unActu->id}}" class="btn btn-primary"> En savoir plus <h6 class="glyphicon glyphicon-chevron-right"></h6> </a>
                <hr >  <hr >

                @endforeach
                {{$allActu->links()}}
               </div>
    
    <!-- FIN CONTENU -->
    
   
    
        </div><!-- end middle part -->

        <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"><!-- start right part -->
            <div  style="margin-top:5px; background-color:#dee;">    
                <h5 style="color:#024292;"class="text-center"><strong >Plus récentes</strong></h5>
                <hr >
                    @foreach($recentActu as $resActu)
                     <ul >
                        <li><a href="{{url('unActu')}}/{{$resActu->id}}"> {!!$resActu->title !!}</a></li>
                        <hr>
                      </ul>
                      @endforeach 
    
        </div><!-- end right part -->
    
    </div><!-- end row-->       

</div><!-- end container -->

@endsection