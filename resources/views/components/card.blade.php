<div class="card mb-3" style="width: 13rem;">
                    <img src="{{Storage::url($movie->img)}}" class="card-img-top cardImg img-fluid" alt="{{$movie['title']}}">
                    <div class="card-body">
                      <a href="{{route('movie.show', compact('movie'))}}" class="btn btn-primary">Leggi di più</a>
                    </div>
                    <div class="card-body"> 
                      <a href="{{route('movie.edit', compact('movie'))}}" class="btn btn-primary">Modifica il film</a>
                    </div>
                  </div>