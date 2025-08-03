<x-layout>
<header class="header">
   <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
               <h2 class="text-white">Titolo: {{$movie->title}}</h2>
               <h3 class="text-white">Regista: {{$movie->director}}</h3>
               <p class="text-white">Trama: {{$movie->plot}}</p>
               <ul>
                @forelse($movie->Genres as $Genre)
                   <li class="text-white">{{$Genre->name}}</li>
                   @empty
                @endforelse
               </ul>
               </div>
            <div class="col-12 col-md-6 ">
                <img src="{{Storage::url($movie->img)}}" alt="">
            </div>
            @auth
             @if($movie->user_id == Auth::id())
            <div class="row">
                <form action="{{route('movie.delete',compact('movie'))}}" method='post'>
                  @csrf
                  @method('DELETE')
                  <button type="submit">Elimina il Film</button>
                </form>
            </div>
            @endauth
             @endif
        </div>
    </div>
</header>
</x-layout>










