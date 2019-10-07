<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\GestionDesCours\Cour;
use App\Http\Requests\ReservationFormRequest;
use App\Http\Requests\CommentaireFormRequest;
use App\Http\Requests\ActuFormRequest;
use App\Http\Requests\CoursFormRequest;
use App\Model\GestionDesCours\Reservation;
use App\Model\GestionDesCours\commentaire;
use App\Model\GestionDesCours\actualite;
use DB;


class GestionCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $allCours=Cour::all();
       // return view('formation')->with('allCours',$allCours);

        return response()->view('formation',['allCours'=>Cour::all()]);
    }
    public function home()
    {
        return response()->view('home',['allCours'=>Cour::all()]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function diplayFormulaire($id)
    {
        return view('formulaire')->with('idDuCours',$id);
        //return response()->view('formulaire',['idDuCours'=>$id]);
    }
    public function delete($id)
    {
       DB::table('reservations')->where('id_reservation',$id)->delete();
      return redirect()->route('admonly')->with('success','Reservation deleted');
      
    }
    public function deleteComment($id)
    {
       DB::table('commentaires')->where('id_commentaires',$id)->delete();
       return redirect()->route('admonly')->with('success','Comment deleted');
       
    }
    public function deleteCours($id)
    {
        DB::table('cours')->where('id_cours',$id)->delete();
        return redirect()->route('admonly')->with('success','Cours deleted');
    }
    public function deleteActu($id)
    {
        DB::table('actualites')->where('id',$id)->delete();
        return redirect()->route('admonly')->with('success','Actu deleted');
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function unActu($id)
    {
        return response()->view('unActu',['actu'=>actualite::find($id),'recentActu'=>actualite::paginate(10)]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listeReservation()
    {
        return response()->view('listeReservation',['allReservation'=>Reservation::all(),'allComment'=>commentaire::all(),
        'allActu'=>actualite::all(),'allCours'=>Cour::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function quiSommesNous()
    {
        return view('qui');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pourquoi()
    {
        return view('pourquoi');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function instructeur()
    {
        return view('instructeur');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function actualite()
    {
        
        return response()->view('actualite',['allActu'=>actualite::paginate(2), 'recentActu'=>actualite::paginate(10)]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReservationFormRequest $request)
    {
        $demande=new Reservation ;
        $demande->id_cours=$request->input('id_cours');
        $demande->nom_user=$request->input('nom_user');
        $demande->prenom_user=$request->input('prenom_user');
        $demande->adresse=$request->input('adresse');
        $demande->email_user=$request->input('email_user');
        $demande->telephone=$request->input('telephone');
        $demande->date_cours=$request->input('date_cours');
        $demande->save();
        return redirect()->route('formation')->with('success','Reservation reussie');
        //return response()->json($demande);
    }

    public function addCours(CoursFormRequest $request)
    {
        $cours=new Cour;
        $cours->nom_cours=$request->input('nom_cours');
        $cours->duree_cours=$request->input('duree_cours');
        $cours->prix_cours=$request->input('prix_cours');
        $cours->lieu_cours=$request->input('lieu_cours');
        $cours->comm_cours=$request->input('comm_cours');
        $cours->save();
        return redirect()->route('admonly')->with('success','Cours added');
    }

    public function addActu(ActuFormRequest $request)
    {
        $actu=new actualite;
        $actu->date_post=$request->input('date_post');
        $actu->title=$request->input('title');
        $actu->source=$request->input('source');
        $actu->content=$request->input('content');
        $actu->save();
        return redirect()->route('admonly')->with('success','Actu added');
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCommentaire(CommentaireFormRequest $request)
    {
        $demande=new commentaire ;
        $demande->nom_user=$request->input('nom_user');
        $demande->email_user=$request->input('email_user');
        $demande->telephone=$request->input('telephone');
        $demande->comment=$request->input('textarea');
        $demande->save();
        return redirect()->route('contact')->with('success','Envoye ! Merci ');
        //return response()->json($demande);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function editCours($id)
    {
        return response()->view('editionCours',['unCours'=>Cour::find($id)]);
        
    }

    public function editActu($id)
    {    
        return response()->view('editionActu',['unActu'=>actualite::find($id)]);
    }

    public function updateActu(ActuFormRequest $request)
    {
        $actu= actualite::find($request->get('id'));
        $actu->date_post=$request->get('date_post');
        $actu->title=$request->get('title');
        $actu->source=$request->get('source');
        $actu->content=$request->get('content');
        $actu->save();
        return redirect()->route('admonly')->with('success','Actu updated');

    }
    public function updateCours(CoursFormRequest $request)
    {

        $cours=Cour::find($request->get('id'));
        $cours->nom_cours=$request->get('nom_cours');
        $cours->duree_cours=$request->get('duree_cours');
        $cours->prix_cours=$request->get('prix_cours');
        $cours->comm_cours=$request->get('comm_cours');
        $cours->save();
        return redirect()->route('admonly')->with('success','Cours updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
