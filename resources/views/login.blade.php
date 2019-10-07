@extends('layouts/master')

@section('login')
@if($message=Session::get('error'))
<div id="error"class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">x</button>
    <p>{{$message}}</p>
</div>
@endif
      <div class="row">
       

         <div class="col-lg-offset-1 col-md-offset-1  col-lg-7 col-md-7 col-sm-12 col-xs-12 jumbotron" >

         <form action="{{url('verificatinAdmin')}}" method="POST">
               @csrf<!-- {{csrf_field()}} -->            
                    <div class="form-group has-feedback">
                         <label for="email_user">Email :</label>
                         <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email" required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                         <label for="telephone">Password :</label>
                         <input type="password" class="form-control"  id="password"name="password"  required="required" style="border-radius:50px;">
                          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                   
                  
                   <div class="form-group has-feedback">            
                      <div class="row">
                      <button class='btn btn-primary'type=" button" style='border-radius:50px;'>Log in</button>                   
                     </div>
</div>

              </form>

        </div>
     </div>






@endsection