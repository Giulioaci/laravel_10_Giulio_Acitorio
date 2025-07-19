<x-layout>
<header class="header">
    <div class="container-fluid">
        @if (session()->has('emailSent'))
        <div class="alert alert-success">
           {{ session('emailSent') }}
        </div>
        @endif
        @if (session()->has('emailError'))
        <div class="alert alert-danger">
           {{ session('emailError') }}
        </div>
        @endif
        @if (session()->has('successMessage'))
        <div class="alert alert-success">
           {{ session('successMessage') }}
        </div>
        @endif
         @if(session()->has('errorMessage'))
         <div class="alert alert-danger">
            {{session('errorMessage')}}
         </div>
         @endif
        <div class="row h-100">
            <div class="col-12">
                <h1 class="text.light display-1 fw-bold colorh1" >Blog</h1>
            </div>
        </div>
    </div>
</header>
</x-layout>
  
