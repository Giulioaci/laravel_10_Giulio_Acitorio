<x-layout>
  <header class="header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
               <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                 <input type="email"  name="email"value="{{ old('email') }}" required autofocus class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 @error('email')
                 <div class="error">{{ $message }}</div>
                 @enderror
                </div>
               <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                <input type="password" name="password" type="password" required class="form-control" id="exampleInputPassword1">
               </div>
                @error('password')
                <div class="error">{{ $message }}</div>
                @enderror
                @if ($errors->any())
                <div class="error">{{ $errors->first() }}</div>
                @endif
              <button type="submit" class="btn btn-primary">Login</button>
             </form>
            </div>
        </div>
    </div>
  </header> 
</x-layout>   
 

