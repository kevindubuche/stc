@extends('layouts/master')

 @section('formation')
 @if($message=Session::get('success'))
<div id="success"class="alert alert-success alert-block">
<button type="button" class="close" data-dismiss="alert">x</button>
 <p>{{$message}}</p>
</div>
@endif
    
 <!-- Carousel1 in index -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="sw.jpg" > 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                        
                                        <h4>NOS FORMATIONS</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                        <hr >
<!-- end carousel_____ -->

        <div class="container "><!-- start div container -->

        
        <div class="jumbotron text-center" style="margin-top:10px; box-shadow: -2px -2px 60px 10px;">    
            <h3 style="color:#024292;">STANDART TRAINING CENTER </h3>
            <hr >
            <h6>Que vous souhaitiez, pour vous ou vos équipes, résoudre un problème immédiat, 
            obtenir une certification, développer vos compétences sur une nouvelle technologie,
             rapidement ou de manière approfondie, nos programmes de formation composés de plusieurs 
             cours répondent à vos besoins de compétences informatiques et organisationnelles</h6>
         </div>
        
         
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
                                <td><a href="#{{$unCours->nom_cours}}" style="color:black;">{{$unCours->nom_cours}}</a></td>
                                <td><a href="#{{$unCours->nom_cours}}" style="color:black;">{{$unCours->duree_cours}}</a></td>
                                <td><a href="#{{$unCours->nom_cours}}" style="color:black;">{{$unCours->prix_cours}} $</a></td>
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
            <div class="row" style="background-color: rgba(237,188,27,0.8); box-shadow: -2px -2px 60px 10px; border-radius:30px; " ><a name="{{$unCours->nom_cours}}"style="padding-top:200px; visibility:hidden;"></a>
            <?php
                }
                else 
                {
             ?>
            <div class="row" style="background-color: rgba(192,192,192,0.6); box-shadow: -1px 0px 50px 2px; border-radius:30px; position:relative; " ><a name="{{$unCours->nom_cours}}"style="padding-top:200px; visibility:hidden;"></a>
            <?php } ?>       

            <div class="row">
                <section class="col-lg-5 col-md-5 col-sm-7 col-xs-7" style="margin-left:5px;" >
                       <h3><strong><a class=" glyphicon glyphicon-cloud" style="color:#024292;"> {{$unCours->nom_cours}} </a>  </strong></h3>
                       <dl class="dl-horizontal">
                       <dt>Durée </dt>
                       <dd> {{$unCours->duree_cours}}  </dd><hr>
                       <dt>Prix</dt>
                       <dd> {{$unCours->prix_cours}} $ </dd><hr>
                       <dt>Lieu</dt>
                       <dd>{{$unCours->lieu_cours}}</dd> <hr>                      
                       </dl>
                   </section>
                   <div class="col-lg-offset-1 col-md-offset-1  col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                     <a href="{{url('formulaire')}}/{{$unCours->id}}" class="btn btn-primary btn-md "style="margin-top:30%;" role="button"><span class="glyphicon glyphicon-calendar" ></span><br/>Reserver<br/> {{$unCours->prix_cours}} US $</a>
                   </div>
            </div>
                   <div class="row">
                        <section class=" col-lg-11 col-md-11 col-sm-11 col-xs-11"style="margin-left:5px;" >
                           
                           <dl class="dl-horizontal">
                           <dt>Details<dt>
                           <dd><h6> {{$unCours->comm_cours}} </h6></dd>
                           </dl>
                        </section>
                   </div>
             </div>
             <hr>
                
             <?php $i++; endforeach; ?>  

            <hr class="hr3"> 
@include('layouts/partials/_choixPartial')


         </div><!-- end div container -->
         @endsection