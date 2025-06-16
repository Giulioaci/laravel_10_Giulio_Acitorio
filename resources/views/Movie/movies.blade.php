<x-layout>
<header>
    <div class="container-fluid header">
        <div class="row h-100">
            <div class="row">
                <h2 class = "text-white">I nostri film</h2>
            </div>
            @foreach ($movies as $movie)
            <div class="col-12 col-md-3">
                <x-card 
                :movie='$movie'
                />
            </div>
           @endforeach
        </div>
    </div>
</header>
</x-layout>
