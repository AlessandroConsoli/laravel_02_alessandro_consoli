<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid bg-warning">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Homepage</a>
            <a class="nav-link" href="{{ route('chi.siamo') }}">Chi siamo</a>
            <a class="nav-link" href="{{route('shop')}}">Negozio</a>
            <a class="nav-link" href="{{route('services')}}">Servizi</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->

<div class="container-fluid bg-body-secondary vh-100">
    <div class="row h-50">
        <div class="col-12 d-flex align-items-center justify-content-center mt-5">
            <h1>Pagina in costruzione</h1>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-center">
            <h2>Stiamo lavorando per voi</h2>
        </div>
        <div class="col-12 d-flex align-items-center justify-content-center">
            <h2>Chi siamo</h2>
        </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
        <ul>
          @foreach ($users as $user)
            <li>{{$user['name']}} {{$user['surname']}}</li>
          @endforeach
        </ul>
      </div>
    </div>
</div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>