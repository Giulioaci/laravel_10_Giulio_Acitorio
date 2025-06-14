<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi Siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Chi-Siamo">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Contatti">Contatti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/movies">Movies</a>
        </li>
</nav>
<header>
    <div class="container-fluid header">
        <div class="row h-100">
            <div class="col-6">
               <h2 class= "text-white text-color text-center">Chi Siamo</h2>
               <p class="text-white text-color text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus at sunt, sed maxime veniam, eaque eveniet et molestias illo corporis provident aut maiores impedit. Eum nobis at ad assumenda ea!</p>
            </div>
            <div class="col-6">
              <img src="/media/images.jpg" alt="foto team">
            </div>
        </div>
    </div>
</header>

<section class="bg-dark">
  <div class="container aboutus">
      <div class="row" >
        @foreach ($users as $user)
            <div class="col-12 col-md-4">
                    <div class="card" style="width: 20rem;">
                     <div class="card-body">
                      <h5 class="card-title">{{$user['name'] . " " . $user['surname']}}</h5>
                      <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                      <a href="{{ route('ChiSiamodetail', ['name'=>$user['name']] )}}" class="card-link">Leggi di più</a>
                    </div>
                   </div>
            </div>
        @endforeach
     </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>