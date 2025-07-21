@extends('layouts.app')

@section('title', 'Actualités | ')

@push('styles')
<style>
    .hero-section {
        background-image: url('{{ $actuality->getCoverFullUrl() }}'); /* remplace par ton image */
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
    

    .btn-read-more {
        background-color: #fff; /* Couleur de fond */
        color: #ff9900; /* Couleur du texte */
        border: 1px solid #F2920E; /* Supprime la bordure */
        border-radius: 5px; /* Coins arrondis */
        padding: 5px 10px; /* Espace interne */
        font-size: 16px; /* Taille du texte */
        text-decoration: none; /* Supprime le soulignement */
        transition: background-color 0.3s ease, color 0.3s ease; /* Animation de transition */
        float: center;
    }

    .btn-read-more:hover {
        background-color: #F2920E; /* Couleur de fond au survol */
        color: white; /* Couleur du texte au survol */
    }

    .text-decoration-none {
        text-decoration: none; /* Supprime le soulignement des liens */
        color: inherit;
    }


</style>
@endpush

@section('content')
    <div class="slider-container">
        <!-- Hero Section / Slide -->
        <section class="hero-section d-flex align-items-center justify-content-center text-white">
            <div class="overlay"></div>
            <div class="container "> {{-- position-relative --}}
                <h1 class="display-3 fw-bold page-title">Actualité</h1>
            </div>
        </section>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $actuality->title }}</h1>
                <p class="text-justify">
                    {{ $actuality->content }}
                </p>
                <p class="text-muted" style="color: #787878; font-size: 14px; font-style: italic; float: right;">
                    <i class="bi bi-clock"></i> {{ $actuality->created_at->format('D d M Y à H:i') }}
                </p>
                {{-- <a href="{{ route('front.actualities') }}" class="btn-read-more text-decoration-none mt-5">Retour aux actualités</a> --}}
            </div>
        </div>
    </div>

    
    @include('layouts.partials.footer')

@endsection


@push('scripts')

@endpush
