<div class="card mb-3" style="width: 13rem;">
                    <img src="{{Storage::url($movie->img)}}" class="card-img-top cardImg img-fluid" alt="{{$movie['title']}}">
                    <div class="card-body">
                      <div class="d-flex">
                          @forelse ($movie->generes as $genere)
                           @if(!$loop->last)
                             <a href="{{route('genere.show',compact('genere'))}}">{{$genere->name}},  </a>
                           @else
                            <a href="{{route('genere.show',compact('genere'))}}">{{$genere->name}} </a>
                           @endif
                          @empty
                          @endforelse
                      </div>
                      <a href="{{route('movie.show', compact('movie'))}}" class="btn btn-primary">Leggi di più</a>
                    </div>
                    <div class="card-body">
                      @auth
                       @if($movie->user_id == Auth::id())
                        <a href="{{route('movie.edit', compact('movie'))}}" class="btn btn-primary">Modifica il film</a>
                        @endif
                      @endauth 
                    </div>
                  </div>