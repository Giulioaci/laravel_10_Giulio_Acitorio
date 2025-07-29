<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h2>Modifica il tuo film:</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div>
                @endif

                <form method="POST" action="{{ route('movie.update', $movie->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input type="text" name="title" class="form-control" id="title"
                               value="{{ old('title', $movie->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="director" class="form-label">Regista:</label>
                        <input type="text" name="director" class="form-control" id="director"
                               value="{{ old('director', $movie->director) }}">
                    </div>

                    <div class="mb-3">
                        <label for="year" class="form-label">Anno di uscita:</label>
                        <input type="text" name="year" class="form-control" id="year"
                               value="{{ old('year', $movie->year) }}">
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci una locandina:</label>
                        <input type="file" name="img" class="form-control" id="img">
                        @if ($movie->img)
                            <p>Immagine attuale:</p>
                            <img src="{{ asset('storage/' . $movie->img) }}" width="120">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="plot" class="form-label">Trama:</label>
                        <textarea name="plot" id="plot" cols="30" rows="10" class="form-control">{{ old('plot', $movie->plot) }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>