<!--
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="collapse navbar-collapse" >
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('stagiaire.index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('stagiaire.create')}}">Ajouter un Stagiaire</a>
      </li>
     
    <form class="form-inline my-2 my-lg-0 d-flex" method="GET" action="{{url('/find')}}">
      <input class="form-control mr-sm-2 mr-3" name="nom" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 m-2" type="submit">Search</button>
    </form>
  </div>
</nav>
-->


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a style="color:#fff" class="navbar-brand" >Gestions Des Stagiaires</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a style="color:#fff" class="nav-link active" aria-current="page" href="{{route('stagiaire.index')}}">Acceuil</a>
        </li>
        <li class="nav-item">
          <a style="color:#fff" class="nav-link" href="{{route('stagiaire.create')}}">Ajouter un Stagiaire</a>
        </li>
      </ul>
      <form class="d-flex" method="GET" action="{{url('/find')}}">
        <input class="form-control me-2" name="nom" type="search" placeholder="Rechercher par nom" aria-label="Search">
        <button class="btn btn-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>