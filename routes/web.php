<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('welcome');
});
//#E5E5E5  #a2d246
Route::get('/', function () {
    return view('Vue');
});
Route::get('/vue/{n}', function ($n) {
return view('vue')->with('id',$n)->where('n','[0-9]+');
});
Route::get('/temp/{n}', function ($n) {
return view('page1')->with('id',$n);
});

//Route::get('/test/{n}', 'LivreController@index');
Route::get('/home', 'LivreController@home');
//Route::get('Addlivre', 'LivreController@index2');
//Route::post('/Addlivre', 'LivreController@add');
Route::get('Contact', 'LivreController@contact');
Route::post('/Contact', 'LivreController@addContact');
Route::get('Image', 'PhotoController@photo');
//Route::post('/Image', 'PhotoController@addPhoto');
Route::post('/Image', 'PhotoController@photoSave');
Route::get('AuteurAdd','AuteurController@getForm');
Route::post('/AuteurAdd','AuteurController@addAuteur');
Route::get('auteurListe','AuteurController@showAll');
Route::get('/auteurDelete/{id}','AuteurController@delete');
Route::get('/auteurUpdate/{id}','AuteurController@showId');
Route::post('/auteurUpdate/{id}','AuteurController@update');


Route::get('Addlivre', 'LivreController@getForm');
Route::post('/Addlivre','LivreController@addLivre');
Route::get('livreListe','LivreController@showAll');
Route::get('/livreDelete/{idLive}','LivreController@delete');
Route::get('/livreUpdate/{idLive}','LivreController@showId');
Route::post('/livreUpdate/{idLive}','LivreController@update');
