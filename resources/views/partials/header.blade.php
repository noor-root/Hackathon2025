<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.logo-img {
  height: 60px !important;
  max-height: none !important;
  width: auto !important;
}

    </style>
</head>
<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
  <img src="{{ asset('assets/img/ofppt.png') }}" alt="OFPPT" class="logo-img">
</a>


        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
                <li><a href="#" class="{{ request()->routeIs('about') ? 'active' : '' }}">A Propos</a></li>
                <li><a href="#" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                <li class="dropdown">
                    <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li>
                
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <!-- Bouton avec dropdown -->
<div class="dropdown">
  <a class="btn-getstarted dropdown-toggle" href="#" id="getStartedDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Se connecte
  </a>

  <ul class="dropdown-menu" aria-labelledby="getStartedDropdown">
    <li><a class="dropdown-item" href="{{ route('login') }}">Connexion</a></li>
    <li><a class="dropdown-item" href="{{ route('register') }}">Inscription</a></li>
  </ul>
</div>


    </div>
</header>
</body>
</html>