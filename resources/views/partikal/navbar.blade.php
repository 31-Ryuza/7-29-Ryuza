<nav class="navbar navbar-expand-lg navbar-light bg-info shadow">
  <div class="container">
    <a class="navbar-brand" href="#">RYU</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ( $link === 'home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $link === 'galery') ? 'active' : '' }}" href="/galery">Galery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $link === 'about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ( $link === 'contact') ? 'active' : '' }}" href="{{ route('contact.create') }}">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>