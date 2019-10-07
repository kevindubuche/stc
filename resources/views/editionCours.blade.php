

@extends('layouts/master')

@section('editionCours')
 

            <div class="container">
            
             <div class="row" style="background-color:#eee; box-shadow:2px 2px 3px; border-radius:16px;" >
                <section class="col-lg-offset-4 col-md-offset-4   col-lg-4 col-md-4 col-sm-10 col-xs-10" >
                  
                <h1>Edit Cours</h1>
                 <form method="POST" action="{{url('editionCours')}}">
                 {{csrf_field()}}
               
                  <div class="form-group has-feedback">
                         <label >Nom Cours :</label>
                         <input type="text" name="nom_cours"id="nom_cours"value="{{$unCours->nom_cours}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label >Duree:</label>
                         <input type="text" name="duree_cours"value="{{ $unCours->duree_cours}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label >Prix :</label>
                         <input type="text" name="prix_cours"value="{{ $unCours->prix_cours}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label >Lieu :</label>
                         <input type="text" name="lieu_cours"value="{{ $unCours->lieu_cours}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label >Comment :</label>
                         <textarea type="text" name="comm_cours">{{ $unCours->comm_cours}}</textarea>
                    </div>

                   

                  
                   <div class="form-group has-feedback">
                   <input type="hidden" name="id" value="{{$unCours->id}}">
                      <div class="row">
                      <button class='btn btn-primary'type=" button" style='float:right;border-radius:50px;margin-right:20px;'>Valider</button>                   
                     </div>
</div>


              </form>
               
               
                </section>     
             </div>
           
                       

            <hr class="hr3"> 



    </div>      

           

@endsection