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



Auth::routes();

Route::get('/', function(){
    return redirect('story');

});


Route::get('/perfil/{user}', 'UserController@mostrarPerfil')->name('perfil'); 
Route::get('/stories', 'UserController@mostrarMyStories')->name('stories'); 


Route::resource('story', 'StoryController');
