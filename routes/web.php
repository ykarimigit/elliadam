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
    return view('index');
});

Route::Group(['prefix'=>'admin'],function(){

});

route::get('/master',function (){
     return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dropdownlist','DataController@getCountries');


Route::get('dropdownlist/getstates/{id}','HomeController@getStates');
Route::post('/edituser{id}','HomeController@edituser');
Route::get('/order','UserpanelController@order');
Route::get('/changepass','UserpanelController@changepass');
Route::post('/changeuserpass{id}','UserpanelController@changeuserpass');
Route::get('/adresinfo','UserpanelController@adresinfo');
Route::get('/newadres','UserpanelController@newadres');
Route::post('/addnewadres{id}','UserpanelController@addnewadres');
Route::get('/havale','UserpanelController@havale');
Route::post('/havalebul{id}','UserpanelController@havalebul');
Route::get('/logou','UserpanelController@logou');
Route::get('/work1','HomeController@work1');
Route::get('/work2','HomeController@work2');
Route::get('/work3','HomeController@work3');
Route::get('/work4','HomeController@work4');
Route::get('/work5','HomeController@work5');
Route::get('/work6','HomeController@work6');







