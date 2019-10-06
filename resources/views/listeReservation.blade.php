<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STC</title>
</head>
<body>
<a href="{{url('logout')}}"><button class=" btn btn-danger">Logout</button></a>
<div class='container table-responsive' >
        <table id='list' class=' display   table table-bordered table-striped table-condensed'>
               <caption>
                  <h4 style="color:#024292;">LISTE DES RESERVATIONS POUR UN COURS</h4>
                </caption>
                <thead>
                    <tr>
                        <th>id_reservation</th>
                        <th>id_cours</th>
                        <th>nom_user</th>
                        <th>prenom_user</th>
                        <th>adresse</th>
                        <th>email_user</th>
                        <th>telephone</th>
                        <th>date_cours</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($allReservation as $uneReservation)
                      <tr id='rowC' style='cursor:pointer;'>
                   
                    <td> {{ $uneReservation->id_reservation}}</td>
                    <td> {{ $uneReservation->id_cours}}</td>
                    <td> {{ $uneReservation->nom_user}}</td>
                    <td> {{ $uneReservation->prenom_user}}</td>
                    <td> {{ $uneReservation->adresse}}</td>
                    <td> {{ $uneReservation->email_user}}</td>
                    <td> {{ $uneReservation->telephone}}</td>
                    <td> {{ $uneReservation->date_cours}}</td>
                    <td> {{ $uneReservation->created_at}}</td>
                    <td> {{ $uneReservation->updated_at}}</td>
                    <td><a href="{{url('delete')}}/{{$uneReservation->id_reservation}}"><button onclick="return confirm('Confirmer suppression');" class=" btn btn-danger">Delete</button></a></td>

                  </tr>
                    @endforeach

                </tbody>
            </table>
</div>
<hr><hr>
<!-- TABLE COMMENTAIRES-->
<div class='container table-responsive' >

        <table id='list2' class=' display   table table-bordered table-striped table-condensed'>
               <caption>
                  <h4 style="color:#024292;">LISTE DES QUESTIONS ET COMMENTAIRES</h4>
                </caption>
                <thead>
                    <tr>
                        <th>id_commentaires</th>
                        <th>nom_user</th>
                        <th>email_user</th>
                        <th>telephone</th>
                        <th>comment</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($allComment as $unComment)
                      <tr id='rowC' style='cursor:pointer;'>
                   
                    <td> {{ $unComment->id_commentaires}}</td>
                    <td> {{ $unComment->nom_user}}</td>
                    <td> {{ $unComment->email_user}}</td>
                    <td> {{ $unComment->telephone}}</td>
                    <td> {{ $unComment->comment}}</td>
                    <td> {{ $unComment->created_at}}</td>
                    <td> {{ $unComment->updated_at}}</td>
                    <td><a href="{{url('deleteComment')}}/{{$unComment->id_commentaires}}"><button onclick="return confirm('Confirmer suppresssion');"class=" btn btn-danger">Delete</button></a></td>

                  </tr>
                    @endforeach

                </tbody>
            </table>
</div>



<hr><hr>
<!-- TABLE ACTUALITES-->
<div class='container table-responsive' >

        <table id='list2' class=' display   table table-bordered table-striped table-condensed'>
               <caption>
                  <h4 style="color:#024292;">LISTE DES ACTUALITES</h4>
                </caption>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>date_post</th>
                        <th>title</th>
                        <th>source</th>
                        <th>content</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                        <th>Action</th>
                    </tr>
                </thead>
           
                
                <tbody>
                <form   method="POST">
               @csrf<!-- {{csrf_field()}} -->
                    @foreach ($allActu as $unActu)
                      <tr id='rowC' style='cursor:pointer;'>
                    <td> {{ $unActu->id}}</td>
                    <td> {{ $unActu->date_post}}></td>
                    <td>{{ $unActu->title}} </td>
                    <td> {{ $unActu->source}} </td>
                    <td> <input type="text" value="{{ $unActu->content}}"></td>
                    <td> {{ $unActu->created_at}}</td>
                    <td> {{ $unActu->updated_at}}</td>
                    <td><a href="{{url('deleteActu')}}/{{$unActu->id}}"><button onclick="return confirm('Confirmer suppresssion');"class=" btn btn-danger">Delete</button></a>
                    <a href="{{url('editActu')}}/{{$unActu->id}}"><button type="button"class=" btn btn-info">Edit</button></a></td>

                  </tr>
                    @endforeach
                    </form>
                </tbody>
                
            </table>
</div>


<hr><hr>
<!-- TABLE COURS-->
<div class='container table-responsive' >

        <table id='list2' class=' display   table table-bordered table-striped table-condensed'>
               <caption>
                  <h4 style="color:#024292;">LISTE DES COURS</h4>
                </caption>
                <thead>
                    <tr>
                        <th>id_cours</th>
                        <th>nom_cours</th>
                        <th>duree_cours</th>
                        <th>prix_cours</th>
                        <th>lieu_cours</th>
                        <th>comm_cours</th>
                        <th>Action</th>
                    </tr>
                </thead>
           
                
                <tbody>
                    @foreach ($allCours as $unCours)
                      <tr id='rowC' style='cursor:pointer;'>
                    <td> {{ $unCours->id_cours}}</td>
                    <td> {{ $unCours->nom_cours}}</td>
                    <td>{{ $unCours->duree_cours}}</td>
                    <td> {{ $unCours->prix_cours}}</td>
                    <td> {{ $unCours->lieu_cours}}</td>
                    <td><input type="text" value="{{ $unCours->comm_cours}}"></td>
                    <td><a href="{{url('deleteCours')}}/{{$unCours->id_cours}}"><button onclick="return confirm('Confirmer suppresssion');"class=" btn btn-danger">Delete</button></a>
                    <a href="{{url('editActu')}}"><button type="button"class=" btn btn-info">Edit</button></a></td>
                  </tr>
                    @endforeach
                 
                </tbody>
                
            </table>
</div>

    <!--pour datatable -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.min.css') }}">  
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" charset="utf8" src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
-->
    <script>
    $(document).ready(function()
    {
        $('#list,#list2').DataTable({  

            select:true,
            "language": {
            "lengthMenu": "Montre _MENU_ resultats par page",
            "zeroRecords": "Aucune information - desole",
            "info": "Montre _PAGE_ de _PAGES_",
            "infoEmpty": "Aucun resultat trouve",
            "infoFiltered": "(filtre de _MAX_ total resultats)",
            "search": "Recherche",
            "paginate":{
            "previous":"Precedent",
            "next":"Prochain"
            }


        },
        buttons:['selectRows']
    }

        );

    $('#delete').click(function()
    {
        ;
    });

     
    });
</script>


</body>



</html>