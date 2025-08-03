<x-layout> 
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <h2 class="text-white">Film del genere <span>{{$Genre->name}}</span></h2>
        </div>
      </div>
      <div class="row">
        @forelse ($Genre->movies as $movie)
          <div class="col-12 col-md-3">
            <x-card :movie="$movie" />
          </div>
        @empty
          <div class="col-12 col-md-8">
            <h4 class="text-white">Nessun film collegato a questa categoria</h4>
            <a href="{{ route('movie.create') }}" class="btn btn-warning">Crealo tu!</a>
          </div>
        @endforelse
      </div>
    </div>
  </header>
</x-layout>
