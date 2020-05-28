@extends('dashboard.master')

@section('content')
<div class="jumbotron">
    <div class="container text-center ">
      <h1 class="display-3">Hola, soy {{ $user->nick }}</h1>
      <p>   <strong>Descripción: </strong> {{ $user->descripcion }}</p>
      <p>   <strong>Nombre:</strong> {{ $user->name }}</p>
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
                
                  <img  class="img-fluid rounded" src="/imagenes/{{ $story->imagen }}">
                </div>
  
                <div class="card-body">
                <h5>{{$story->title}}</h5>
                  <p class="card-text" >{{$story->body}}</p>
                 
  
                  <a href="{{ route('perfil', $user) }}" class="badge badge-dark"> {{ $user->nick }}</a>                       
                  <span class="badge badge-info">{{$story->status}}</span>
                  <a href="{{ route('story.show', $story) }}" class="badge badge-info">Leer</a>  
                  
                  @if ($validador)
                    @if ($story->status == "publicando")
                    <a href="{{ route('story.edit', $story) }}" class="badge badge-success">Editar</a>       
                    
                    
                    
                    @endif
                    <a type="button" class="badge badge-danger" data-toggle="modal" data-target="#eliminarModal" data-id="{{ $story->id }}">Eliminar</a>

                  @endif
                  
                </div>
              </div>
            </div>
        @endforeach
      @endif 
  
  
  
    </div>
  </div>
  </div>
           
        
        </div>

@endsection