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
                <form method="post" action="{{route('movie.update', compact('movie'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   <div class="mb-3">
                    <label for="title" class="form-label">Titolo:</label>
                    <input type="text" name='title' class="form-control" id="title" aria-describedby="titlelHelp">
                   </div>
                    <div class="mb-3">
                    <label for="director" class="form-label">Regista:</label>
                    <input type="text" name='director'class="form-control" id="title" aria-describedby="directorlHelp">
                   </div>
                   <div class="mb-3">
                    <label for="year" class="form-label">Anno di uscita:</label>
                    <input type="text" name='year' class="form-control" id="title" aria-describedby="yearlHelp">
                   </div>
                   <div class="mb-3">
                    <label for="img" class="form-label">Inserisci una locandina:</label>
                    <input type="file" name='img' class="form-control" id="img" aria-describedby="yearlHelp">
                   </div>
                   <div class="mb-3">
                    <label for="plot" class="form-label">Trama:</label>
                    <textarea name="plot" id="" cols="30" rows="10" class="form-control"></textarea>
                   </div>
                   <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>    