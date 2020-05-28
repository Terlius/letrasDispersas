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

Route::get('/miperfil/{user}' , 'StoryController@mostrarPerfil')->name('miperfil');
Route::get('/perfil/{user}', 'StoryController@mostrarPerfil')->name('perfil'); 
Route::get('/stories', 'StoryController@mostrarMyStories')->name('stories'); 


Route::resource('story', 'StoryController');
