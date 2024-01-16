<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark"> 
    <div class="container">
      <a class="navbar-brand fs-4 text-danger" href="#">GAMEFINDER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              @foreach ($genres["results"] as $genre)
              <li><a class="dropdown-item" href="/genre/{{ $genre["id"] }}">{{ $genre["name"] }}</a></li>
              @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/favourite">MyFavourite</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>