

@extends('layouts/master')

@section('editionActu')
 

            <div class="container">
            
             <div class="row" style="background-color:#eee; box-shadow:2px 2px 3px; border-radius:16px;" >
                <section class="col-lg-offset-4 col-md-offset-4   col-lg-4 col-md-4 col-sm-10 col-xs-10" >
                  
                <h1>Edit Actualite</h1>
                 <form method="POST" action="{{url('editionActu')}}">
                 {{csrf_field()}}
               
                  <div class="form-group has-feedback">
                         <label for="nom_user">Date de publication :</label>
                         <input type="text" name="date_post"value="{{ $unActu->date_post}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label for="prenom_user">Title:</label>
                         <input type="text" name="title"value="{{ $unActu->title}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label for="adresse">Source :</label>
                         <input type="text" name="source"value="{{ $unActu->source}}">
                    </div>

                    <div class="form-group has-feedback">
                         <label for="email_user">Content :</label>
                         <input type="text" name="content"value="{{ $unActu->content}}">
                    </div>

                   

                  
                   <div class="form-group has-feedback">
                   <input type="hidden" name="id" value="{{$unActu->id}}">
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