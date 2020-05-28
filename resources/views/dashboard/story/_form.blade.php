@csrf
    <div class="form-group row">
      <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

      <div class="col-md-6">
          <input id="title" class="form-control" type="text" name="title" value="{{ old('title', $story->title) }}" required autofocus>
          
      </div>
    </div>

      
    <div class="form-group row">
      <label for="categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

      <div class="col-md-6">
        <select class="custom-select" name='categoria' id="categoria">
          <option value="General">General</option>
          <option value="Fantasia">Fantasía</option>
          <option value="Accion">Acción</option>
          <option value="Drama">Drama</option>
          <option value="Romance">Romance</option>
          <option value="Sexual">Sexual</option>
        </select>
          
      </div>
    </div>





      
    <div class="form-group row">
      <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>

      <div class="col-md-6">
         

          <textarea class="form-control"  id="body" name="body" rows="4" required>
            {{ old('body', $story->body) }}

          </textarea>

      </div>
    </div>

    <div class="form-group row">
      <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

      <div class="col-md-6">
        <select class="custom-select" name="status" id="status">
          @if ($story->status == "publicando")
            <option value="publicando" selected>Publicando</option>
            <option value="finalizado">Terminado</option>
          @else
            <option value="publicando">Publicando</option>
            <option value="finalizado" selected>Terminado</option>
          @endif

         
         
          
          
         
        </select>
          
      </div>
    </div>

    <div class="form-group row">
      <label for="imagen" class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>

      <div class="col-md-6">
        <div class="custom-file">
          <input type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="imagen">
          <label class="custom-file-label" for="inputGroupFile01">Subir imagen</label>
        </div>
    

      </div>
    </div>


   


    
    <div class="form-group row mb-0">
      <div class="col-md-6 offset-md-4">
          <button type="submit" class="btn btn-primary">
              {{ __('Publicar') }}
          </button>
      </div>
  </div>