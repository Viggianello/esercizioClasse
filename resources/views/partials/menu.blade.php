<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Esercizio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        {{-- recupero il nome della rotta corrente, verifico se è homepage: se è vero scrivo active se no nulla --}}
      <li class="nav-item {{Request::route()->getName()== 'homepage' ? 'active': '' }}">
        <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::route()->getName()== 'prodotti' ? 'active': '' }}">
        <a class="nav-link" href="{{route('prodotti')}}">Prodotti</a>
      </li>
    </ul>
  </div>
</nav>
