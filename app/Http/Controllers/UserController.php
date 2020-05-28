<?php

namespace App\Http\Controllers;
use App\User;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{   

    public function __construct(){
        $this->middleware('auth')->except('mostrarPerfil');


    }




    public function mostrarMyStories(){


        $user = User::find(Auth::user()->id);
        $validador = false;
        if($user->id == Auth::user()->id ){
            $validador = true;
        }



        $stories = Story::where('user_id', $user->id)->cursor();
       
        
        return view('dashboard.story.stories', ['user'=> $user, 'stories'=> $stories, 'validador'=> $validador]);
    }

    public function mostrarPerfil(User $user){
        $validador = false;
        if (Auth::user()) {
            if($user->id == Auth::user()->id ){
                $validador = true;
            }
        } 
        
        
       
        
        $stories = Story::where('user_id', $user->id)->cursor();
       
        
        return view('dashboard.usuario.perfil', ['user'=> $user, 'stories'=> $stories, 'validador'=> $validador]);
    }
}
