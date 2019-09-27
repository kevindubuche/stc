@extends('layouts/master')

 @section('formation')

    
 <!-- Carousel1 in index -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="sw.jpg" > 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                        <h1><strong>Standart Training Center</strong></h1>
                                        <h4>NOS FORMATIONS</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                        <hr >
<!-- end carousel_____ -->

        <div class="container "><!-- start div container -->

        <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="jumbotron text-center" style="margin-top:10px;">    
            <h3 style="color:#024292;">STANDART TRAINING CENTER </h3>
            <hr >
            <h6>Que vous souhaitiez, pour vous ou vos équipes, résoudre un problème immédiat, 
            obtenir une certification, développer vos compétences sur une nouvelle technologie,
             rapidement ou de manière approfondie, nos programmes de formation composés de plus
              de 1800 cours répondent à vos besoins de compétences informatiques et organisationnelles</h6>
         </div>

         <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="jumbotron text-center" style="margin-top:10px;">     
                <section class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed">
                        <caption>
                            <h4 style="color:#024292;">NOS FORMATIONS PROFESSIONELLES</h4>
                        </caption>
                        <thead>
                            <tr>
                            <th>Titre</th>
                            <th>Duree</th>
                            <th>Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allCours as $unCours)
                            <tr>
                                <td>{{$unCours->nom_cours}}</td>
                                <td>{{$unCours->duree_cours}}</td>
                                <td>{{$unCours->prix_cours}} $</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>



         </div>
         
          
            <?php
                $i=1;
                foreach($allCours as $unCours): 
                if ($i%2==0)
                    {
            ?>
            <div class="row" style="background-color: rgba(237,188,27,0.8); box-shadow:2px 2px 3px; border-radius:30px; " >
            <?php
                }
                else 
                {
             ?>
            <div class="row" style="background-color: rgba(192,192,192,0.6); box-shadow:4px 4px 3px; border-radius:30px; position:relative; " >
            <?php } ?>       

            
                <section class="col-lg-5 col-md-5 col-sm-5 col-xs-5" >
                       <h3><strong><a class=" glyphicon glyphicon-cloud" style="color:#024292; "> {{$unCours->nom_cours}} </a>  </strong></h3>
                       <dl class="dl-horizontal">
                       <dt>Durée </dt>
                       <dd> {{$unCours->duree_cours}}  </dd><hr>
                       <dt>Prix</dt>
                       <dd> {{$unCours->prix_cours}} $ </dd><hr>
                       <dt>Details</dt>
                       <dd>{{$unCours->comm_cours}}  </dd><hr>
                       <dt>Lieu</dt>
                       <dd>Votre choix</dd>
                       </dl>
                   </section>
                   <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                     <a href="formulaire/{{$unCours->id_cours}}" class="btn btn-primary btn-lg "style="margin-top:30%;" role="button"><span class="glyphicon glyphicon-calendar" ></span><br/>Reserver<br/> {{$unCours->prix_cours}} US $</a>
                     <a><strong> </strong> </a>
                   </div>
             </div>
             <hr>
                
             <?php $i++; endforeach; ?>  

            <hr class="hr3"> 
@include('layouts/partials/_choixPartial')


         </div><!-- end div container -->
         @endsection