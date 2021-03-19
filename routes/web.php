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

/*Route::get('/', function () {
  $name="jorler";
    return view('welcome',['name'=>$name]);
});*/

Route::resource('productos','ProductoController');
/*Route::get('/productos','ProductoController@index');
Route::get('/productocreate','ProductoController@create');
Route::post('/productostore','ProductoController@store');
Route::get('/productoedit{producto_id}','ProductoController@edit');
Route::post('/productoupdate/{producto_id}','ProductoController@update');*/
Route::post('/productodelete/{producto_id}','ProductoController@destroy');
