<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Codescandy" />

    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" />

    <!-- Libs CSS -->
    <link href="{{ asset('assets/fonts/feather/feather.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/app-style.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/libs/tiny-slider/dist/tiny-slider.css') }}" />
    <title>@yield('title', 'Welcome') {{ config('app.name') }}</title>
    <style>
        .navbar {
            background-color: #232324FF;
        }
        .navbar-brand img {
            height: 40px;
        }
        .offcanvas {
            background-color: #1E1E1FFF;
            color: white;
        }
        .offcanvas a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            position: relative;
            font-size: 16px;
            transition: color 0.3s ease-in-out;
        }

        .offcanvas a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 5px;
            width: 0%;
            height: 2px;
            background-color: #F2920E; /* Couleur du soulignement */
            transition: width 0.3s ease-in-out;
        }

        .offcanvas a:hover {
            color: #F2920E; /* Changement de couleur du texte au survol */
        }

        .offcanvas a:hover::after {
            width: 100%; /* Animation du soulignement */
        }


        .btn:hover {
            background-color: #F2920E; /* Changez cette couleur selon vos besoins */
            color: #011F48FF; /* Changez cette couleur selon vos besoins */
        }

    </style>

    @stack('styles')
</head>

<body class="bg-white">

    <main>

        <nav class="navbar navbar-dark navbar-expand-lg px-3">
            <a class="navbar-brand" href="{{ route('front.welcome') }}">
                <img src="assets/logos.png" alt="Logo">
            </a>
            <button class="btn ms-auto" style="color: white; border: 1px solid white;" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas">
                ☰
            </button>
        </nav>

        <!-- Menu Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" style="color: white;">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <a href="{{ route('front.welcome') }}"> Accueil</a>
                <a href="{{ route('front.about') }}"> A propos</a>
                <a href="#"> Notre equipe</a>
                <a href="{{ route('front.our-references') }}"> References</a>
                <a href="{{ route('front.our-jobs') }}"> Nos metiers</a>
                <a href="#"> New</a>
                <a href="#"> Contact</a>
            </div>
        </div>

        <!-- Hero Section -->
        @yield('content')
        <!-- Trusted -->
    </main>
<!-- Footer -->
<!-- Footer
<footer class="footer bg-dark-stable py-8" style="background:#023252">
    <div class="container">
        <div class="row gy-6 gy-xl-0 pb-8">
            <div class="col-xl-6 col-lg-12 col-md-7 col-12">
                <div class="d-flex flex-column gap-4">
                    <div>
                        <img src="{{ asset('assets/_ALLO-SERVICES-LOGO-BLANC 1.png') }}" alt="Geeks logo"  width="100"/>
                    </div>
                    <p class="mb-0">Découvrez et connectez-vous avec les entreprises et professionnels de la Côte d'Ivoire sur notre plateforme dédiée.
                    Notre objectif est construit sur la base du jobbing, un modèle économique entre particuliers. C'est avant tout une mise en relation entre les besoins d'une personne ou une entreprise et la compétence d'une autre.Nous proposons des jobbers aux compétences confirmées aux personnes ou aux entreprises dans le besoin.</p>

                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="d-flex flex-column gap-4">
                    <span class="text-white-stable">Pages</span>
                    <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                        <li><a href="#" class="nav-link">Accueil</a></li>
                        <li><a href="#" class="nav-link">Creation de compte</a></li>
                        <li><a href="#" class="nav-link">Connexion</a></li>
                        <li><a href="" class="nav-link">Annuaire</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-md-3 col-6">
                <div class="d-flex flex-column gap-3">
                    <span class="text-white-stable"></span>
                    <ul class="list-unstyled mb-0 d-flex flex-column nav nav-footer nav-x-0">
                        <li><a href="" class="nav-link">Professionel</a></li>
                        <li><a href="" class="nav-link">Entreprise </a></li>
                    </ul>
                        <a href="#"><img src="{{ asset('assets/images/svg/appstore.svg') }}" alt="" class="img-fluid" /></a>
                        <a href="#"><img src="{{ asset('assets/images/svg/playstore.svg') }}" alt="" class="img-fluid" /></a>
                </div>
            </div>


        </div>
        <div class="py-4" style="background:#023252">
            <div class="container text-center">
                <span class="text-white">© 2024 Allo services Tous droits réservés.</span>
            </div>
        </div>
    </div>
</footer>



    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/%40popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/tnsSlider.js') }}"></script>

    {{-- <!-- Darkmode JS -->
    <script src="{{ asset('assets/js/vendors/darkMode.js') }}"></script> --}}

    @stack('scripts')
    
</body>
</html>
