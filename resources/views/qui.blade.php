@extends('layouts/master')


 @section('qui')        


           <!-- Carousel1 -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('formation.jpg')}}"> 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                     
                                        <h4>QUI SOMMES-NOUS ?</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->
 <div class="container ">
            

        <div class="row "> 
                <div class="col-md-4 col-sm-6 col-xs-12 ">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Standard Training Center </h3>
                        <p style="text-align:justify; color:#024292; ">Standard Training Center est prioritairement une  institution qui
                         dispense des cours de réseautique basé sur la technologie Cisco.
                          Il couvre les réseaux et Internet de manière générique. </p>    
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12 ">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Notre objectif</h3>
                        <p style="text-align:justify; color:#024292;">Il vise à apprendre aux étudiants à concevoir, installer et maintenir 
                        des réseaux informatiques. Cependant en vue de répondre à différents besoins
                         dans le domaine des TIC, Standard training Center proposera de nouveaux 
                         programmes de formation adaptés à différents profils et objectifs professionnels. </p>    
                </div><!-- end col -->
            

                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Programmes offerts par le STC</h3>
                        <ul style="text-align:justify; color:#024292; ">
                                    <li>CCNA Routing and Switching</li>
                                    <li>CCNA Voice</li>
                                    <li>CCNA Security</li>
                                    <li>CCNP</li>
                                    <li>CompTIAA+</li>
                                    <li>System administration with Linux</li>
                                    <li>Windows Server 20XX</li>
                                    <li>Oracle</li>
                                    <li>Airmax (Ubiquiti)</li>
                                </ul>    
                </div><!-- end col -->
            </div><!-- end row -->

            <hr > <hr > <hr > <hr > 
            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Laboratoire</h3>
                        <p style="text-align:justify; color:#024292; ">Standard Training Center met à la disposition des Etudiants ainsi 
                        que des professionnels qui veulent se perfectionner dans le domaine de 
                        réseau informatique un laboratoire Cisco  et  des moniteurs certifiés pour 
                        faciliter leur apprentissage et leur réussite</p>    
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Nous</h3>
                        <p style="text-align:justify; color:#024292; ">Standard Training Center est une entreprise a but lucratif forme par un 
                        groupe d’ingénieur et commerçant  très expérimentés sur le marche haïtien. 
                        Ces expériences nous  ont permis de mieux comprendre les besoins des grandes,
                         petites et moyennes entreprises dans le domaine des Tics  et les offrir des 
                         solutions appropriées en  Formation, Réseaux, et télécommunication.</p>    
                </div><!-- end col -->
            

                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Autres</h3>
                        <p style="text-align:justify; color:#024292; ">Standard Training Center a pour objectif de commercialiser des matériels
                         informatiques (Router Cisco | Switch Cisco | Scanner | Printer | Laptop) et de fournir des services de consultations et de 
                         formation dans le domaine de l’informatique, et de toutes autres disciplines connexes.</p>    
                </div><!-- end col -->
            </div><!-- end row -->


            <hr > <hr > <hr > <hr > 


                       <!-- Carousel1 -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{asset('group.jpg')}}"> 
                                    <div class="carousel-caption" > 
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <section class=" col-lg-7 col-md-7 col-sm-10 col-xs-12 " >
                                            
                                            <h4><strong>La formation réseau Cisco ICND1 offerte par le STC est le point de départ pour 
                                            tous les professionnels amenés à travailler en environnement Cisco. Elle permet d’acquérir les connaissances
                                             et compétences nécessaires pour installer, faire fonctionner, configurer et vérifier les réseaux IPv4 et IPv6 ...
                                              </strong></h4>
                                            
                                            </section>
                                            <section class="col-lg-4 col-md-4 col-sm-10 col-xs-12 " >
                                            
                                            <h5 style="text-align:justify; "> ...
                                              y compris la configuration des commutateurs LAN, la connexion aux réseaux WAN et l'identification des menaces pour la sécurité de base. </h5>
                                            
                                            </section>
                                        </div>
                                   </div>
                                    
                                                            
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->





<div class="jumbotron text-center" style="margin-top:10px;">    
            
            <hr >
            <h6>Que vous vous en doutiez ou non, vos compétences sont la clé de votre succès. La technologie 
              et les processus sont essentiels pour atteindre les objectifs organisationnels. Même s'ils ont
               été démocratisés par la révolution numérique, le plus grand challenge reste le manque de compétences 
               qui détourne votre retour sur les investissements technologiques. Les organisations qui utilisent avec
                succès la technologie pour accélérer leur performance transforment également avec succès les capacités
                 de leurs employés afin de maximiser leurs investissements.</h6>
            </div>


          

<hr><hr> <hr><hr>
          
               


@include('layouts/partials/_choixPartial')


</div>


<!-- end col-3______________________________________________________________________________________________________ -->


 
@endsection