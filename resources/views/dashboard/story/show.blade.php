@extends('dashboard.master')
@section('content')
@include('dashboard.partials.validation-error')
    

            <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

            <div class="col-md-6">
                <input id="title" class="form-control" type="text" name="title" value="{{ $story-> title }}" readonly autofocus>
                
            </div>
            </div>

            
            <div class="form-group row">
                <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
    
                <div class="col-md-6">
                    <img  class="rounded" src="/imagenes/{{ $story->imagen }}" id="imagen" width="400">
                    
                </div>
            </div>
            


            <div class="form-group row">
                <label for="nick" class="col-md-4 col-form-label text-md-right">{{ __('Nick') }}</label>
    
                <div class="col-md-6">
                    <input id="nick" class="form-control" type="text" name="nick" value="{{ $user->nick }}" readonly autofocus>
                    
            </div>
            </div>
            
            
            
            
            <div class="form-group row">
            <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

            <div class="col-md-6">
                <input id="categoria" class="form-control" type="text" name="categoria" value="{{ $story-> categoria }}" readonly autofocus>
                
            </div>
            </div>





            
            <div class="form-group row">
            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>

            <div class="col-md-6">
                

                <textarea class="form-control"  id="body" name="body" rows="4" readonly >
                    {{ $story->body }}

                </textarea>

            </div>
            </div>

            <div class="form-group row">
            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

            <div class="col-md-6">
                <input id="status" class="form-control" type="text" name="status" value="{{ $story-> status }}" readonly autofocus>
                
            </div>
            </div>



            <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <a class="btn btn-outline-success mt-3 mb-3" href="{{ URL::previous() }}"> Atras </a>
            </div>
            </div>
         
        
            
         
 

@endsection