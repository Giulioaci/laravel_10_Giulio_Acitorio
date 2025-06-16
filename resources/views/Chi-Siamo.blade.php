<x-layout>
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
</x-layout>
 