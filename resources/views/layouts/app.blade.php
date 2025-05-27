<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom-style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap");


/* custom-style.css */

body {
    background-color: #f0f0f0;
    font-family: 'Poppins', sans-serif;
}

/* Container du formulaire */
.form-container {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    margin-left: 60px;/* Pagination Styles */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    padding-left: 0;
    list-style-type: none;
}

.pagination li {
    margin: 0 5px;
}

.pagination li a, .pagination li span {
    color: #007bff;
    padding: 10px 15px;
    text-decoration: none;
    border-radius: 50px;
    border: 1px solid #ddd;
    font-size: 14px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.pagination li a:hover, .pagination li span:hover {
    background-color: #007bff;
    color: white;
}

.pagination .active a {
    background-color: #007bff;
    color: white;
    pointer-events: none;
}

.pagination .disabled a, .pagination .disabled span {
    background-color: #f8f9fa;
    color: #ddd;
    pointer-events: none;
}

.pagination .next, .pagination .prev {
    font-weight: bold;
}

.pagination li a, .pagination li span {
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Small screens adjustments */
@media (max-width: 767px) {
    .pagination li a, .pagination li span {
        padding: 8px 12px;
        font-size: 12px;
    }
}

    margin-right: 30px;

}

.form-title {
    color: #333;
    font-size: 2rem;
    text-align: center;
}

/* Pour chaque groupe de formulaire */
.form-group {
    margin-bottom: 20px;
}

.form-label {
    font-weight: 600;
    font-size: 1rem;
    color: #555;
}

.form-input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    color: #333;
    background-color: #f9f9f9;
    box-sizing: border-box;
}

.form-input:focus {
    outline-color: #4CAF50;
    border-color: #4CAF50;
}

/* Style du bouton d'enregistrement */
.submit-btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-weight: bold;
    font-size: 1.1rem;
    transition: background-color 0.3s ease;
}

.submit-btn:hover {
    background-color: #45a049;
}

.submit-btn:focus {
    box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.25);
}

@media (max-width: 768px) {
    .form-container {
        padding: 20px;
    }

    .form-title {
        font-size: 1.5rem;
    }

    .form-input {
        font-size: 0.9rem;
    }

    .submit-btn {
        font-size: 1rem;
    }
}

body {
    background: rgb(219, 219, 219);
    font-family: "Poppins", sans-serif;
}

.header {
    height: 60px;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
}

.header .left,
.left .search-box,
.header .right {
    display: flex;
    align-items: center;
}

.left a {
    font-size: 25px;
    font-weight: 600;
    color: #000;
    margin: 2rem 8rem 2rem 2rem;
}

.profile img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    cursor: pointer;
}

.wrapper .nav {
    background: #fff;
    height: 275%;
    width: 250px;
    overflow-y: auto;
    position: absolute;
}

.nav .sidebar {
    padding: 1px;
    display: flex;
    flex-direction: column;
}

.sidebar span {
    font-size: 14px;
    color: grey;
    margin: 1rem 3rem;
}

.sidebar a {
    width: 100%;
    padding: 0.8rem 3rem;
    font-size: 16px;
    font-weight: 500;
    color: rgb(100, 100, 100);
    text-decoration:none;
}

.sidebar .bottom {
    margin-top: 4rem;
    padding-bottom: 7rem;
    display: flex;
    flex-direction: column;
}

.bottom a {
    font-size: 14px;
    text-decoration:none;
}

.sidebar a:hover {
    background: rgb(235, 235, 235);   
}


.sidebar a.active {
    border-left: 2px solid rgb(100, 100, 100);
}

.wrapper .main {
    width: 80%;
    position: relative;
    left: 230px;
    padding: 1rem;
}

.main .banner {
    width: 100%;
    /background: rgb(42, 40, 68);/
    background:rgb(5, 38, 83);
    color: #fff;
    padding: 0.5rem 1rem 1rem 3rem;
    border-radius: 5px;
    margin-top: 10px;
}

.banner h1,
.banner p,
.banner button {
    margin: 10px;
}
.banner button {
    display: block;
    padding: 6px 12px;
    border-radius: 5px;
    cursor: pointer;
}
.main .table-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
nav img {
  height: 50px; /* Hauteur du logo */
  width: auto; /* Maintient les proportions */
  margin-right: 10px; /* Espace à droite du logo */
}


/*hada profile */
/* Styles généraux */




.row {
    display: flex;
    flex-wrap: wrap;
    margin: 10px ; /* Pour gérer les gouttières */
}

.col-md-8 {
    flex: 0 0 66.67%; /* Occupe 8/12 de la largeur */
    max-width: 66.67%;
    padding: 0 15px;
}

.col-md-4 {
    flex: 0 0 33.33%; /* Occupe 4/12 de la largeur */
    max-width: 33.33%;
    padding: 0 15px;
}

.card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
 
}

.card-header {
    padding: 15px;
    border-bottom: 1px solid #eee;
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 0;
}

.card-body {
    padding: 15px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    font-weight: 500;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 4px;
    padding: 10px;
    width: 100%;
}
a{
    text-decoration:none;
}

.btn-fill {
    background-color: #007bff; /* Couleur de bouton principale */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-fill:hover {
    background-color: #0056b3; /* Couleur de bouton au survol */
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 15px;
}


/* Styles spécifiques pour le profil utilisateur */
.card-user .avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%; /* Image de profil ronde */
    object-fit: cover; /* Pour éviter la déformation de l'image */
    margin-bottom: 10px;
    border: 3px solid white; /* Ajout d'une bordure blanche */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Ajout d'une ombre */
}

.card-user .author {
    text-align: center;
    margin-bottom: 20px;
}

.card-user .title {
    margin-bottom: 5px;
}

.card-user .description {
    color: #777;
    font-size: 0.9rem;
}

.card-user .button-container {
    text-align: center;
}

.btn-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin: 0 5px;
    background-color: transparent;
    border: none;
    cursor: pointer;
}

.btn-icon i {
    font-size: 1.2rem;
}

.btn-facebook { color: #3b5998; }
.btn-twitter { color: #00aced; }
.btn-google { color: #dd4b39; }

.sidebar i {
            margin-right: 5px; /* Added to create space between icon and text */
        }

        
.container .banner {
    width: 100%;
    /background: rgb(42, 40, 68);/
    background:rgb(5, 38, 83);
    color: #fff;
    padding: 0.5rem 1rem 1rem 3rem;
    border-radius: 5px;
    margin-top: 10px;
}

.banner h1,
.banner p,
.banner button {
    margin: 10px;
}
.banner button {
    display: block;
    padding: 6px 12px;
    border-radius: 5px;
    cursor: pointer;
}

/* Responsive Design (pour les petits écrans) */
@media (max-width: 768px) {
    .col-md-8, .col-md-4 {
        flex: 0 0 100%; /* Occupe toute la largeur */
        max-width: 100%;
    }
}
:root {
    --poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;
	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
    --light-blue1:rgb(186, 243, 203);
    --blue1:rgb(122, 226, 153);
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
    --light-orange1:rgb(236, 185, 164);
    --orange1: rgb(231, 168, 143);
    --light-rose:rgb(241, 183, 197);
    --rose: rgb(219, 90, 122);
    --hover-clr: #222533;
}
.box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
.box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}
.box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
.box-info li:nth-child(2) .bx {
	background: var(--light-yellow);
	color: var(--yellow);
}.box-info li:nth-child(3) .bx {
	background: var(--light-orange);
	color: var(--orange);
}
.box-info li:nth-child(4) .bx {
	background: var(--light-blue1);
	color: var(--blue1);
}.box-info li:nth-child(5) .bx {
	background: var(--light-orange1);
	color: var(--orange);
}.box-info li:nth-child(5) .bx {
	background: var(--light-orange1);
	color: var(--orange);
}.box-info li:nth-child(6) .bx {
	background: var(--light-rose);
	color: var(--rose);
}.box-info li .text h3 {
    margin-top:7px;
    margin-left:3px;
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}.box-info li .text p {
	color: var(--dark);	
}
</style>
</head>
<body>
    <div id="app">
        <!-- Barre de navigation -->
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Logo CNSS -->
                Locaction
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <span class="nav-link">
                                {{ Auth::user()->nom }}
                            </span>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="wrapper">
                @auth
     
                <nav class="nav">
                    <div class="sidebar">
                        @if(Auth::user()->role == 'client')  
                        <span>Votre Chaine</span>
                        <a href="#" class="active">
                            <i class="fas fa-plus-circle"></i> Réserer
                        </a>
                        <a href="#">
                            <i class="fas fa-list"></i> Réservations
                        </a>
                        <a href="#">
                            <i class="fas fa-file"></i> Facturations
                        </a>
                        <a href="#">
                            <i class="fas fa-user"></i> Catégories
                        </a>
                   @endif
                        @if(Auth::user()->role == 'admin')                    
                            <a href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                            <a href="{{route('categories.index')}}">
                                <i class="fas fa-bullhorn"></i> Catégories
                            </a>
                            <a href="{{route('equipements.index')}}">
                                <i class="fas fa-bullhorn"></i> Equipements
                            </a>
                            <a href="#">
                                <i class="fas fa-bullhorn"></i> Locaux
                            </a>
                            <a href="#">
                                <i class="fas fa-cogs"></i> Plannings  
                            </a>
                            <a href="# ">
                                <i class="fas fa-users"></i> Utilisateurs
                            </a>
                             <a href="# ">
                                <i class="fas fa-users"></i> Paiements
                            </a>
                        @endif
                        <div class="bottom">
                            <span>Plus de Liens</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </div>
                </nav>
                 @endauth
                <div class="main">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</body>
</html>