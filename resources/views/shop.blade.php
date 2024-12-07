<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop</title>
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

<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-center mt-5">
            @foreach ($products as $product)
            <div class="card mx-5" style="width: 18rem;">
              <img src="https://picsum.photos/200" class="card-img-top" alt="Il top di gamma di casa {{$product['brand']}}">
              <div class="card-body">
                <h5 class="card-title">{{$product['brand']}} - {{$product['productName']}}</h5>
                <p class="card-text">Il top di gamma di casa {{$product['brand']}}</p>
                <a href="{{route('services')}}" class="btn btn-primary">Scopri di più su questa offerta!</a>
              </div>
            </div>
            @endforeach
        </div>
    </div>
</div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>