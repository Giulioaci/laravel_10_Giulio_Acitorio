<x-layout>
<header class ="header">
    <div class="container-fluid">
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
            <form method='post' action="{{route('genere.submit')}}">
                @csrf
               <div class="mb-3">
                <label for="genere" class="form-label text-white">Inserisci la categoria</label>
                <input type="text" name="name" class="form-control" id="genere" aria-describedby="emailHelp" value="{{old('name')}}">
               </div>
               <button type="submit" class="btn btn-primary">Invia</button>
            </form>
        </div>
      </div>
    </div>
</header>
</x-layout>