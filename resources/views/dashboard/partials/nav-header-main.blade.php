<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('story.index') }}">
    <img src="\imagenes\novia.png"  height="40" class="d-inline-block align-top" alt="" loading="lazy">
    LetrasDispersas
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
      
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('story.index')}}"> Historias</a>
        </li>
        @auth
          
        
        <li class="nav-item">
          
          <a class="nav-link" href="{{route('story.create')}}"> Publicar </a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('stories')}}"> Mis Historias</a>
        </li>
        @endauth
      </ul>


 

   
     

    <div class="collapse navbar-collapse" id="navbarSupportedContent col">
                    

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->nick }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('perfil', Auth::user()) }}">
                        {{ __('Mi perfil') }}
                        </a>
                        
                    
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                      
                  </div>
              </li>
          @endguest
      </ul>
  </div>
  </div>
</nav>

