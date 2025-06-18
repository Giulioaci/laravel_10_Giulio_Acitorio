<x-layout>
<header>
    <div class="container-fluid header">
        <div class="row h-100 justify-content-around align-items-center">
            <div class="col-12 h-25 justify-content-center align-items-center">
               <h2 class= "text-white text-color display-5 text-center">Contatti</h2>
            </div>
            <div class="class col-md-3 box d-flex flex-column justify-content-center align-items-center text-white">
                <i class=" icon bi bi-whatsapp"></i>
            </div>
            <div class="class col-md-3 box d-flex flex-column justify-content-center align-items-center text-white">
                <i class=" icon bi bi-instagram"></i>
            </div>
            <div class="class col-md-3 box d-flex flex-column justify-content-center align-items-center text-white">
                <i class=" icon bi bi-facebook"></i>
            </div>
            <div class="row h-95 justify-content-center align-items-center">
            <h2 class= "text-white display-15 text-center text-color">Invia una mail</h2>
            <div class="col-6 col md-8">
            <form>
                <div class="mb-8">
                  <label for="user" class="form-label text-white">Nome</label>
                  <input type="text" name='user' class="form-control" id="user" aria-describedby="emailHelp">
                </div>
                <div class="mb-8">
                  <label for="email" class="form-label text-white">Email</label>
                  <input type="email" name='email' class="form-control" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label text-white">Messaggio</label>
                  <input type="message" name='message'  class="form-control" id="message">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</header>
</x-layout>
 