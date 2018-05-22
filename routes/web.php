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

Route::get('/', function () {
    return view('pages.home');
});
Route::post('/accueilForm', 'AccueilController@store')->name("accueilFormRoute");
Route::post('suivisForm', 'SuivisController@store')->name("suivisFormRoute");
Route::post('piecesJointesForm', 'PiecesJointesController@store')->name("piecesJointesFormRoute");
Route::post('consultation', 'ConsultationController@index')->name("consultation");
//Route::post('suiviAutocomp', 'SuivisController@autoComplession')->name("suiviAutocomp");

Route::get('/suiviAutoCompleRoute', 'SuivisController@autoComplession');

/*Route::get('/categrories',function(){
    if(Request::ajax()){
      //dd(Request::ajax());
      return $_GET['sujet'];
    }
});


Route::post('/categrories',function(){
    if(Request::ajax()){
      //var_dump(Input::all());
      return "pam adama MBOUP post";
    }
});*/

/*
Route::name('root_path')->get('/', 'PagesController@home');
Route::name('article_path')->get('/{infoArticle}', 'PagesController@article');*/
