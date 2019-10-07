
@extends('layouts/master')


 <!-- Carousel1 in index -->
 @section('uniqueIndex')
    

    
 <!-- Carousel1 in index -->
 
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="carousel1.jpg"  > 
                                    <div class="carousel-caption" style="background-color:rgba(237,188,27,0.7); box-shadow:2px 2px 3px; border-radius:16px; "> 
                                            <h2 ><strong>Bienvenue au Standart Training Center</strong></h2>
                                          
                                    </div>
                                    
                                </div>

                                <div class="item">
                                    <img src="carousel2.jpg" >
                                    <div class="carousel-caption"style="background-color:rgba(237,188,27,0.7); box-shadow:2px 2px 3px; border-radius:16px;">
                                    <h4><strong>Nous formons des professionnels dans le monde de la technologie</strong></h4>
                                     
                                    </div>
                                </div>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                    </div>
            


                    

<!-- end carousel______________________________________________________________________________________________________ -->

<div class="container " >

<hr>


<div class="row "> 
                <div class="col-md-5 col-sm-12 col-xs-12 col-lg-5 text-center"style="font-family: Century Gothic; margin-right:50px;">        
                        <h1> Standard Training Center </h1><br>
                        <h4>Devenez des professionnels du Hight Tech.</h4><br>
                        <a href="{{url('qui')}}"class="btn btn-lg center"style="color:#fff; background-color:#0bb73c; padding-bottom:20px;padding-top:20px; hover:background-color:#eee;">Decouvrez qui nous sommes</a>    
                </div><!-- end col -->

                <div class=" col-lg-6 col-md-6 col-sm-12 col-xs-12 " >        
         <div style="padding-top:80px; " >               
<span style="color:black; display:block;font-size:18px;font-weight:300;letter-spacing:3px;margin-bottom:10px;
position:relative; text-shadow: 1px 3px grey; animation: text 3s 1s infinite"><strong>STANDART TRAINING</strong></span>
<span  style="font-size:16px; color:#6ab04c;animation: text 3s 1s infinite">CENTER</span>

        </div>
                </div><!-- end col -->
            

                
            </div><!-- end row -->

            

<hr><hr>
<hr><hr>
 <div class="row" >

                <section class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        <div class="jumbotron text-center" style="margin-top:10px; box-shadow: 2px 2px 3px;" >    
            <h3 style="color:#024292;">STANDART TRAINING CENTER </h3>
            <hr >
            <h6>Standard Training Center est prioritairement une institution qui dispense des cours 
            de réseautique basés sur la technologie Cisco. Il couvre les réseaux et Internet de manière générique. </h6>
         </div>
            


            
                <div class="container"style="margin-top:40px;" >
                <h6>
                    <div class="row justify-content-center " style="background-color: rgba(237,188,27,0.8); box-shadow:2px 2px 3px black; border-radius:16px;color:white;  "> 
                        <div class=" col-md-3 col-sm-4 col-xs-12 text-center "   >             
                                <h4><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a>  Nos formations</h4>
                                    
                                <ul style="text-align:justify; ">
                                @foreach($allCours as $cours)
                                    <li><a href="{{url('formation')}}#{{$cours->nom_cours}}" class=" glyphicon glyphicon-chevron-right"  style="color:white;">{{ $cours->nom_cours}}</a></li><br/>
                                @endforeach
                                    
                                </ul>
                        </div><!-- end col -->

                        <div class="col-md-3 col-sm-4 col-xs-12 text-center ">             
                                <h4><a class=" glyphicon  glyphicon-check" style="color:white; text-align:justify;"> </a>  Laboratoire</h4>
                                <p style="text-align:justify; ">Standard Training Center met à la disposition des Etudiants ainsi que des 
                                professionnels qui veulent se perfectionner dans le domaine de réseau informatique un laboratoire Cisco  
                                et  des moniteurs certifiés pour faciliter leur apprentissage et leur réussite.</p>
                        </div><!-- end col -->

                        <div class="col-md-3 col-sm-4 col-xs-12 text-center ">             
                                <h4 ><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a>  Nous offrons une formation a distance</h4>
                                <p style="text-align:justify; ">Nos experts délivrent un contenu accrédité et leader sur le marché à travers des formats d’apprentissage multiples — formation en classe,
                                 cours à distance. Notre expérience et notre expertise nous permettent aussi de développer  de nombreux parcours de formation mixtes 
                                 qui augmentent les profils de compétences tout en améliorant les performances. Vous recherchez des ressources et outils évolutifs pour 
                                 combler vos lacunes ?  C’est ce que nous proposons. </p>
                        </div><!-- end col -->
                        <div class="col-md-3 col-sm-4 col-xs-12 text-center  ">             
                                <h4><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a>  Vente</h4>
                                <p style="text-align:justify; ">Standard Training center offre à son aimable clientèle toute une variété de produit à un prix dérisoire. 
Vous trouverez :
</p>
                        </div><!-- end col -->
                        
                        </div>
                        <br>
                        <div class="row justify-content-center "style= "background-color: rgba(168,168,168,0.6); box-shadow:4px 4px 3px; border-radius:16px; "> 

                    <div class="col-md-3 col-sm-4 col-xs-12 text-center ">             
                                <h4><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a>  Library</h4>
                                <ul style="text-align:justify; ">
                                    <li>CCNA Routing and Switching ICND2 200-101 Official Cert Guide </li><hr>
                                    <li>CCNA Routing and Switching ICND1 100-101 Official Cert Guide </li><hr>
                                    <li>CCNP Route 642-902 official Certification Guide</li><hr>
                                    <li>CCNA SECURITY STUDY GUIDE</li><hr>
                                    <li>etc</li>
                                    
                                </ul>
                        </div><!-- end col -->

                        <div class="col-md-3 col-sm-4 col-xs-12 text-center  ">             
                                <h4><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a> Matériels</h4>
                                <ul style="text-align:justify; ">
                                    <li>Router Cisco </li>
                                    <li>Switch Cisco</li><hr>
                                    <li>Scanner</li>
                                    <li>Printer</li><hr>
                                    <li>Laptop</li>
                                    <li>etc</li>
                                    
                                </ul>
                        </div><!-- end col -->

                        <div class="col-md-3 col-sm-4 col-xs-12 text-center " >             
                                <h4><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a>  Réseaux informatiques</h4>
                                <p style="text-align:justify; ">L'offre de formation réseaux informatiques constitue le coeur de métier du STC,
                                 et couvre de nombreuses technologies de routage et commutation.Depuis près de 20 ans maintenant, les principaux 
                                 éditeurs et constructeurs du marché des réseaux informatiques s'appuient sur l'expertise  pour garantir une 
                                 formation de qualité, délivrée par des instructeurs certifiés, incluant des supports agréés,
                                  et la mise en oeuvre de matériels et logiciels nécessaires à la bonne exécution des cours et des labs.</p>
                        </div><!-- end col -->

                        <div class="col-md-3 col-sm-4 col-xs-12 text-center ">             
                                <h4><a class=" glyphicon glyphicon-check" style="color:white; text-align:justify;"> </a>  Fondamentaux IT</h4>
                                <p style="text-align:justify; ">Les instructeurs du STC proposent et développent des formations Etat de
                                 l'Art en informatique et systèmes réseaux, et de nombreux cours sur-mesure pour les entreprises.</p>
                        </div><!-- end col -->
                        </div> <!-- end row -->
                        </h6>
                </div><!-- end container -->

            <hr class="hr3"> 







<!-- end col-3______________________________________________________________________________________________________ -->


 






<div class="row" style="margin-top:100px; margin-left:60px; margin-right:60px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="message-box">
                                        <h2 style="color:#024292">Notre Institution</h2>
                                        <p style="text-align:justify;font-style:italic;">   Standard Training Center est une entreprise a but lucratif
                                         formée par un groupe d’ingénieurs et commerçants  très expérimentés sur le marché haïtien. 
                                         Ces expériences nous  ont permis de mieux comprendre les besoins des grandes, petites et
                                          moyennes entreprises dans le domaine des Tics  et les offrir des solutions appropriées en 
                                           Formation, Réseaux, et télécommunication.
                                                </p>
                                                <p style="text-align:justify; font-style:italic;">Standard Training Center a pour objectif de commercialiser
                                                 des matériels informatiques et de fournir des services de consultations et de formation
                                                  dans le domaine de l’informatique, et de toutes autres disciplines connexes.
                                                </p>

                                    </div><!-- end messagebox -->
                                </div><!-- end col -->
				
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                   <div id="myCarousel" class="carousel slide" data-ride="carousel" style="border-width:3px; border-style:solid; border-color:white; box-shadow:2px 2px 3px;">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="bm.jpg">                                   
                                    </div>
                                    
                                    
                                </div>   

                    </div><!-- end carousel -->
            </div><!-- end col -->
    
         </div>
               






@include('layouts/partials/_choixPartial')
     



<!-- end ______________________________________________________________________________________________________ -->


 
@endsection
                    
