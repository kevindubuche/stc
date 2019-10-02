<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/formation','GestionCoursController@index')->name('formation');
Route::get('/formulaire/{id}','GestionCoursController@diplayFormulaire');
Route::post('/reservation','GestionCoursController@store');
Route::post('/commentaire','GestionCoursController@storeCommentaire');
Route::get('/qui','GestionCoursController@quiSommesNous');
Route::get('/pourquoi','GestionCoursController@pourquoi');
Route::get('/instructeur','GestionCoursController@instructeur');
Route::get('/contact','GestionCoursController@contact');
Route::get('/actualite','GestionCoursController@actualite')->name('actualite');
Route::get('/admonly','GestionCoursController@listeReservation');
Route::get('/unActu/{id}','GestionCoursController@unActu');
Route::get('/delete/{id}','GestionCoursController@delete');
Route::get('/deleteComment/{id}','GestionCoursController@deleteComment');