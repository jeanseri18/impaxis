@extends('layouts.guest')

@section('title', 'Nos métiers | ')

@push('styles')
<style>
    .hero-section {
        background-image: url('/assets/image/slide_4.jpg'); /* remplace par ton image */
        background-size: cover;
        background-position: center;
        height: 60vh; /* ou 100vh pour plein écran */
        position: relative;
    }

    .hero-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4); /* effet foncé sur l'image */
        z-index: 1;
    }

    .hero-section .container {
        z-index: 2;
    }

    .page-title {
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        font-size: 10vh;
    }


    

    /* Custom styles for the services section */
    .services-section {
        padding: 20px 0; /* Padding interne pour la section */
    }
    .services-section .container {
        max-width: 800px; /* Limite la largeur du contenu pour une meilleure lisibilité */
    }
    .orange-line {
        height: 3px;
        background-color: #ff9900; /* Couleur orange */
        width: 100%;
        margin-top: 50px; /* Espace au dessus de la ligne */
        margin-bottom: 25px; /* Espace sous la ligne */
    }
    .service-group {
        margin-bottom: 20px; /* Espace entre les groupes de services */
    }
    .service-group h3 {
        font-size: 1.2rem; /* Taille du titre */
        font-weight: bold;
        /* color: #fff; */
        margin-bottom: 15px;
    }
    /* Pour le symbole étoile, nous allons le mettre en CSS ou directement dans le HTML */
    .service-group h3::before {
        content: '* '; /* Ajoute l'étoile avant le texte */
        /* color: #fff; Couleur de l'étoile */
        margin-right: 5px;
    }
    .service-group ul {
        list-style: none; /* Supprime les puces par défaut */
        padding-left: 0; /* Supprime le padding par défaut des listes */
    }
    .service-group ul li {
        font-size: 1.2rem; /* Taille du texte des éléments de liste */
        /* color: #1a1a1a; Couleur du texte */
        margin-bottom: 8px; /* Espace entre les éléments de liste */
    }
    .service-group ul li::before {
        content: '• '; /* Ajoute une puce personnalisée (rond) */
        /* color: #fff; Couleur de la puce */
        font-size: 1.2rem; /* Taille de la puce */
        margin-right: 10px;
    }
    .service-title {
        font-size: 4.0rem; /* Taille du titre */
        font-weight: bold;
        margin-bottom: 20px; /* Espace sous le titre */
    }


</style>
@endpush

@section('content')
    <div class="slider-container">
        <!-- Hero Section / Slide -->
        <section class="hero-section d-flex align-items-center justify-content-center text-white">
            <div class="overlay"></div>
            <div class="container "> {{-- position-relative --}}
                <h1 class="display-3 fw-bold page-title">Nos métiers</h1>
            </div>
        </section>
    </div>

    <div class="container">
        {{-- 1er --}}
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <h1 class="service-title">Investment Banking </h1>
                </div>
            </div>
            <div class="col-md-8">
                <section class="services-section">
                    <div class="container">
                        {{-- Ligne orange --}}
                        <div class="orange-line"></div>

                        <div class="service-group">
                            <h3>Conseil Financier Stratégique</h3>
                        </div>
                        <div class="service-group">
                            <h3>Financement de projet</h3>
                        </div>
                        <div class="service-group">
                            <h3>Fusion-Acquisition</h3>
                        </div>
                        <div class="service-group">
                            <h3>Introduction en bourse </h3>
                        </div>
                        <div class="service-group">
                            <h3>Levée de fonds sur le marché des capitaux</h3>
                        </div>
                        <div class="service-group">
                            <h3>Financement structuré</h3>
                        </div>
                        {{-- <div class="service-group">
                            <h3>Structured & Leveraged Finance</h3>
                        </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <div style="background-color: #f8f8f8">
        <div class="container">
        {{-- 2ème --}}
            <div class="row">
                <div class="col-md-8">
                    <section class="services-section">
                        <div class="container">
                            <div class="orange-line"></div>

                            <div class="service-group">
                                <h3>Sales & Trading</h3>
                                <ul>
                                    <li>Equities</li>
                                    <li>Fixed income</li>
                                </ul>
                            </div>

                            <div class="service-group">
                                <h3>FX & Commodities/ Hedging </h3>
                            </div>

                            <div class="service-group">
                                <h3>Produits structurés et dérivés</h3>
                                <ul>
                                    <li>Realationship Mgt</li>
                                    <li>Sales</li>
                                </ul>
                            </div>
                            {{-- <div class="service-group">
                                <h3>Produits structurés</h3>
                            </div>
                            <div class="service-group">
                                <h3>Custody</h3>
                            </div> --}}
                        </div>
                    </section>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <h1 class="service-title">Markets </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container">
        {{-- 3ème --}}
        <div class="row">
            <div class="col-md-5">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <h1 class="service-title">Gestion d’actifs </h1>
                </div>
            </div>
            <div class="col-md-7">
                <section class="services-section">
                    <div class="container">
                        <div class="orange-line"></div>

                        <div class="service-group">
                            <h3>Opcvm et Fonds dédiés</h3>
                            {{-- <ul>
                                <li>Shariah Compliant</li>
                                <li>PE « classique »</li>
                                <li>Principal Investments</li>
                                <li>Private Banking</li>
                            </ul> --}}
                        </div>

                        <div class="service-group">
                            <h3>Gestion sous mandat</h3>
                            {{-- <ul>
                                <li>Listed Securities</li>
                                <li>Non-Listed Securities</li>
                            </ul> --}}
                        </div>

                        {{-- <div class="service-group">
                            <h3>Private Banking</h3>
                            <ul>
                                <li>Realationship Mgt</li>
                                <li>Sales</li>
                            </ul>
                        </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>

<div style="background-color: #f8f8f8">
    <div class="container">
        {{-- 4ème --}}
        <div class="row">
            <div class="col-md-8">
                <section class="services-section">
                    <div class="container">
                        <div class="orange-line"></div>

                        <div class="service-group">
                            <h3>Global Macro Economy (Monde / Régions / Pays)</h3>
                        </div>

                        <div class="service-group">
                            <h3>Global Equity / FI / Benchmarks</h3>
                        </div>

                        <div class="service-group">
                            <h3>Secteurs</h3>
                        </div>

                        <div class="service-group">
                            <h3>Produits : Equity / FI</h3>
                        </div>
                        <div class="service-group">
                            <h3>Illiquid assets</h3>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-center h-100">
                    <h1 class="service-title">Global Research </h1>
                </div>
            </div>
        </div>

    </div>
</div>



    @include('layouts.partials.footer')

@endsection


@push('scripts')

@endpush
