<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('Homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class= "nav-link active" aria-current="page" href="{{ route('aboutus')}}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('Contacts')}}">Contatti</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link active " role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Movies
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('movielist')}}">I nostri film</a></li>
            <li class="nav-item">
          <li><a class="dropdown-item" href="{{ route('movie.create')}}">Inserisci il tuo film</a>
          <li><a class="dropdown-item" href="{{ route('genere.create')}}">Aggiungi categoria</a></li>
          <li><a class="dropdown-item" href="{{ route('genere.index')}}">Tutte le categorie</a></li>
        </li>
        </li>
        </ul> 
        <li class="nav-item dropdown">
          @auth
          <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('user.profile') }}">Profilo personale</a>
            </li>
            <li>
              <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit(); "class="dropdown-item">Logout</a>
              <form action="{{route('logout')}}" method="POST" style="display:none;" id="form-logout">@csrf</form>
            </li>
          </ul>
          @else
          <a class="nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Ciao, Ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
            </ul>
            @endauth
        </li>
    </ul>
   </nav>



   









