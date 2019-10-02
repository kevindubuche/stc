@extends('layouts/master')


 @section('qui')        


           <!-- Carousel1 -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('stat.jpg')}}"> 
                                    <div class="carousel-caption" style="background-color:#024292; box-shadow:2px 2px 3px; opacity:0.7; border-radius:16px;"> 
                                       
                                        <h4>POURQUOI SE CERTIFIER ?</h4>
                                    </div>                                 
                                </div>
                            </div>                  
                         </div>
                    <hr >
<!-- end carousel_____ -->
 <div class="container ">
            

        <div class="row "> 
                <div class="col-md-4 col-sm-6 col-xs-12 ">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>L'importance des certifications </h3>
                        <p style="text-align:justify; color:#024292; ">Avec nos différents modules de formation, nos méthodes 
                        d'enseignement et nos ressources à valeur ajoutée, vous pouvez compter sur les équipes du STC
                        pour vous aider à réussir votre certification; mais avant, à comprendre et expliquer comment choisir
                         et atteindre vos objectifs de certification. </p>    
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12 ">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Pourquoi se certifier ?</h3>
                        <p style="text-align:justify; color:#024292;">Défi personnel, évolution de carrière, sont les raisons
                         les plus souvent évoquées lorsque les professionnels visent une certification professionnelle.
                          Selon une étude IDC régulièrement mise à jour, plus les organisations possèdent de professionnels 
                          certifiés dans leurs équipes IT et mieux elles performent. </p>    
                </div><!-- end col -->
            

                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Pourquoi se certifier ?</h3>
                        <p style="text-align:justify; color:#024292; ">
                        Le STC conduit, par ailleurs, sa propre enquête depuis plus de 10 
                        ans maintenant auprès de ses clients et de tous les professionnels IT dans le monde
                         pour connaître l'impact de la formation et de la certification, à la fois sur la motivation,
                          ou encore le salaire.   
                          </p>
                </div><!-- end col -->
            </div><!-- end row -->

            <hr > <hr > <hr > <hr > 
            <div class="row"> 
                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Les statistques</h3>
                        <p style="text-align:justify; color:#024292; ">En synthèse, on note que les certifications jouent
                         un rôle toujours aussi important dans la contribution des professionnels de l'informatique au succès 
                         de l'entreprise : 52% des répondants ont déclaré qu'après avoir suivi une formation certifiante, leur
                          expertise était plus recherchée au sein de leur organisation et 45% ont déclaré avoir mis en œuvre des
                           projets d'efficacité.
 	85% des professionnels informatiques ayant répondu ont déclaré aussi détenir au moins un titre de certification
</p>    
                </div><!-- end col -->

                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Choisir une certification</h3>
                        <p style="text-align:justify; color:#024292; ">Le niveau des certifications professionnelles disponibles
                         s'est accru - tant en termes de technologies couvertes, que du niveau d'expertise atteint. Les formations 
                         STC préparent aux certifications des plus grands constructeurs IT tels que Cisco, Microsoft, 
                         AWS, Citrix, VMware, etc</p>    
                </div><!-- end col -->
            

                <div class="col-md-4 col-sm-6 col-xs-12">        
                        <h3> <i class="glyphicon glyphicon-time  "></i>Choisir une certification</h3>
                        <p style="text-align:justify; color:#024292; ">Ces certifications valident la connaissance des technologies spécifiques 
                        ainsi que les compétences opérationnelles métiers ou transversales.
                    Le STC est leader sur la formation et l'accompagnement à la certification Microsoft, et certifie un grand nombre des partenaires accrédités Cisco.
</p>    
                </div><!-- end col -->
            </div><!-- end row -->



<hr><hr> <hr><hr>
          
               


@include('layouts/partials/_choixPartial')


</div>


<!-- end col-3______________________________________________________________________________________________________ -->


 
@endsection