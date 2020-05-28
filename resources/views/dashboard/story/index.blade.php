@extends('dashboard.master')

@section('content')


   
 <div class="container">
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Letras Dispersas, un lugar para escribir historias.</h1>
      <p class="lead my-3">Comparte, lee y sé feliz.</p>
     
    </div>
  </div>
  

  <div class="album py-5 bg-dark">
    <div class="container ">
  
      <div class="row">
        
      @if(isset($stories))
        
        @foreach ($stories as $story)
        
          
          <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <div class="embed-responsive">
                
                  <img  class="img-fluid rounded" src="imagenes/{{ $story->imagen }}">
                </div>
  
                <div class="card-body">
                <h5>{{$story->title}}</h5>
                  <p class="card-text" >{{$story->body}}</p>
                  @php
                        $user1 = null;
                       foreach ($users as $user){
                        if ($user->id == $story->user_id){
                            $user->nick; 
                            $user1 = $user;     
                        }
                       }
                           
  
                      
                  @endphp
                  
                  <a href="{{ route('perfil', $user1) }}" class="badge badge-dark"> {{ $user1->nick }}</a>                     
                  <span class="badge  badge-info">{{$story->status}}</span>
                  <a href="{{ route('story.show', $story) }}" class="badge badge-info">Leer</a>  
                  
                  
                  
                </div>
              </div>
            </div>
        @endforeach
      @endif 
  
    {{ $stories->links() }}
  
    </div>
  </div>
  </div>
</div>


@endsection