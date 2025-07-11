<x-layout>
<header class="header">
   <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
               <h2 class="text-white">Titolo: {{$movie->title}}</h2>
               <h3 class="text-white">Regista: {{$movie->director}}</h3>
               <p class="text-white">Trama: {{$movie->plot}}</p>
            </div>
            <div class="col-12 col-md-6 ">
                <img src="{{Storage::url($movie->img)}}" alt="">
            </div>
            <div class="row">
                <form action="{{route('movie.delete',compact('movie'))}}" method='post'>
                  @csrf
                  @method('DELETE')
                  <button type="submit">Elimina il Film</button>
                </form>
            </div>
        </div>
    </div>
</header>
</x-layout>










