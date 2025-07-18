<x-layout>
<header class="header">
    <div class="container-fluid movies">
        <div class="row">
            <h2 class="text-white text-color text-center"> Profilo {{Auth::user()->name}}</h2>
            @forelse (Auth::user()->movies as $movie)
            <div class="col-12 col-md-4 mb-3">
                <x-card :movie="$movie" />
            </div>
            @empty
            <h3 class ="text-white text-center">Non hai ancora pubblicato nessun film</h3>
            @endforelse
        </div>
    </div>
</header>
</x-layout>