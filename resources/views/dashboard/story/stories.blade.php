@extends('dashboard.master')

@section('content')
    
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




 <div class="modal fade" id="eliminarModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <p> ¿Seguro que desea eliminar el historia?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form id="formDelete"  method="POST" action="{{ route('story.destroy', 0) }}" data-action="{{ route('story.destroy', 0) }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Eliminar</button>
        
        </form>
        
      </div>
    </div>
  </div>
</div>



 <script>
  window.onload = function(){
          $('#eliminarModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id = button.data('id') // Extract info from data-* attributes
  
          action=$('#formDelete').attr('data-action').slice(0, -1);
  
          var modal = $(this)
          $('#formDelete').attr('action', action+id);
          modal.find('.modal-title').text('Vas a eliminar la historia  ' + id)
      
      })
  }
  </script>




@endsection