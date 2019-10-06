<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\GestionDesCours\login;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verificationAdm(Request $request)
    {
            if(Auth::attempt(['email'=>$request->input('email_user'),'password'=>$request->input('password')]))
        {
            return redirect()->route('admonly');
        }
        else
        {   //dd('error'); SONJE FE YON MSG PARET NAN VUE A
            return response()->view('login');

        }
        
     
    }
    public function login()
    { 
        return response()->view('login');
     
    }
    public function logout()
    {
        Auth::logout();
        return response()->view('home');
    }
   
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

   



}
