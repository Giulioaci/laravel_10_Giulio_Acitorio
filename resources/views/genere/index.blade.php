<x-layout>
<header class="header">
    <div class="container-fluid">
        <div class="row ">
            <h2 class="text-white">
                Esplora per genere:
            </h2>
            @foreach ($generes as $genere)
            <div class="col-12 col-md-3">
               <a href="{{route('genere.show', compact('genere'))}}">
                <div class="box mx-auto">
                  <h3 class="text-white">{{$genere->name}}</h3>
                  </a>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</header>
</x-layout>