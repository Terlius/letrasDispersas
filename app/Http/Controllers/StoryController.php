<?php

namespace App\Http\Controllers;

use App\User;
use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreStoryStory;


class StoryController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except('index', 'show');


    }
    
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::orderBy('created_at','desc')->paginate(5);
        $users = User::all();
        return view('dashboard.story.index', ['stories'=>$stories, 'users'=> $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        return view('dashboard.story.create', ['story'=> new Story()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:5',
            'categoria' => 'required',
            'status' => 'required'
        ]);

        $story = new Story();
        $story->user_id = Auth::user()->id;
        $story->title = $request->input('title');
        $story->categoria = $request->input('categoria');
        $story->body = $request->input('body');
        $story->status = $request->input('status');

        if($request->hasFile('imagen')){
            
            $file = $request->file('imagen');
            $nameImg = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/', $nameImg);

        }

        $story->imagen = $nameImg;
       
        $story->save();
   
        return back()->with('status','Historia publicada con exito');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        $user = User::find($story -> user_id);
        return view('dashboard.story.show', ['story'=> $story, 'user' => $user]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        
        return view('dashboard.story.edit', ["story"=> $story ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' => 'required|min:5',
            'categoria' => 'required',
            'status' => 'required',
            'imagen' => 'required',
        ]);
         
        
        
        $story->title = $request->input('title');
        $story->categoria = $request->input('categoria');
        $story->body = $request->input('body');
        $story->status = $request->input('status');

        if($request->hasFile('imagen')){
            
            $file = $request->file('imagen');
            $nameImg = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/', $nameImg);
            $story->imagen = $nameImg;

        }

        
       
        $story->update();

        return back()->with('status','Historia modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        $story->delete();
        return back()->with('status','Historia eliminado con exito');
    }

  


}
