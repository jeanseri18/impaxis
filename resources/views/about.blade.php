@extends('layouts.guest')

@section('title', 'A propos | ')

@push('styles')
<style>
    .hero-section {
        background-image: url('/assets/image/slide_2.jpg'); /* remplace par ton image */
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

    /* Custom section card */
    .custom-card {
        border-radius: 15px; /* Bordures arrondies */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre légère */
        max-width: 400px; /* Largeur maximale du card */
        height: 100%;
        padding: 30px;
        position: relative;
        overflow: hidden; /* Pour que le triangle ne dépasse pas */
    }

    .custom-card:hover{
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Ombre plus marquée au survol */
        border: 2px solid #ff9900 ; /* Bordure bleue au survol */
    }

    .custom-card h2 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 15px;
        color: #343a40;
    }

    .custom-card p {
        font-size: 1rem;
        line-height: 1.6;
        color: #6c757d;
        margin-bottom: 25px;
    }

    .custom-card .read-more {
        font-weight: bold;
        color: #007bff; /* Couleur du lien Bootstrap */
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .custom-card .read-more:hover {
        text-decoration: underline;
    }

    .custom-card .read-more svg {
        margin-left: 8px;
        width: 12px;
        height: 12px;
        fill: #007bff;
    }

    .triangle-icon {
        position: absolute;
        top: 25px; /* Ajuster la position verticale */
        right: 25px; /* Ajuster la position horizontale */
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-bottom: 20px solid #ff9900; /* Couleur orange du triangle */
        transform: rotate(45deg); /* Rotation pour l'angle */
    }

    /* Custom team section card */
    .team-section {
        padding: 50px 20px;
    }

    .section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .section-header h2 {
        font-size: 2.2rem;
        font-weight: bold;
        margin-bottom: 0;
    }

    .section-header .see-more {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .section-header .see-more:hover {
        text-decoration: underline;
    }

    .team-member-card {
        background-color: #000; /* Le fond reste noir pour le card */
        border: none; /* Pas de bordure pour le card */
        text-align: left;
        padding: 0; /* Pas de padding par défaut pour le card */
    }

    .team-member-card img {
        width: 100%;
        height: auto;
        display: block; /* Supprime l'espace sous l'image */
        margin-bottom: 20px; /* Espace sous l'image */
    }

    .team-member-card h3 {
        font-size: 1.4rem;
        font-weight: bold;
        margin-bottom: 5px;
        color: #fff;
    }

    .team-member-card .title-role {
        font-size: 1rem;
        color: #f0f0f0; /* Légèrement plus clair que le gris */
        margin-bottom: 3px;
    }

    .team-member-card .experience {
        font-size: 0.9rem;
        color: #ccc; /* Couleur légèrement plus claire pour l'expérience */
    }

    /* Animate team-member-card */
    .team-member-animated {
        transition: transform 0.3s cubic-bezier(.4,2,.6,1), box-shadow 0.3s;
    }

    .team-member-animated:hover {
        transform: translateY(-10px) scale(1.04) rotate(-1deg);
        box-shadow: 0 12px 32px rgba(0,0,0,0.25);
    }

    /* Responsive adjustments for smaller screens */
    @media (max-width: 767.98px) {
        .team-member-card {
            margin-bottom: 30px; /* Espace entre les cards sur mobile */
        }

        .custom-card {
            max-width: 100%; /* Les cards prennent toute la largeur sur les petits écrans */
            margin-bottom: 30px; /* Espace entre les cards sur mobile */
        }

        .hero-section {
            height: 40vh; /* Hauteur réduite sur mobile */
        }

        .page-title {
            font-size: 6vh; /* Taille de police réduite sur mobile */
        }
    }
    
</style>
@endpush

@section('content')
<div class="slider-container">
    <!-- Hero Section / Slide -->
    <section class="hero-section d-flex align-items-center justify-content-center text-white">
        <div class="overlay"></div>
        <div class="container "> 
            <h1 class="display-3 fw-bold page-title">{!! __('about.page-title') !!}</h1>
        </div>
    </section>
</div>

<div class="container">
    <p class="mt-6 text-justify" style="">
        {!! __('about.intro-paragraph') !!}
    </p>

    <div class="text-center mb-6 mt-6">
        <h2> {!! __('about.title-2') !!} </h2>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="triangle-icon"></div>
                <h3 class="card-title"> IMPAXIS<br>SECURITIES</h3>
                <p class="card-text">
                    {!! __('about.filiale-1-description') !!}
                </p>
                <a href="#" class="read-more">
                    {{ __('about.read-more') }}
                    <svg viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card" style="height: 100%">
                <div class="triangle-icon"></div>
                <h3 class="card-title">IMPAXIS<br>CAPITAL</h3>
                <p class="card-text">
                    {{ __('about.filiale-2-description') }}
                </p>
                <br><br>
                <a href="#" class="read-more">
                     {{ __('about.read-more') }}
                    <svg viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="triangle-icon"></div>
                <h3 class="card-title">IMPAXIS ASSET MANAGEMENT<br>WEST AFRICA</h3>
                <p class="card-text">
                    {{ __('about.filiale-3-description') }}
                </p>
                <a href="#" class="read-more">
                    {{ __('about.read-more') }}
                    <svg viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<section class="team-section" style="background-color: #000; color: #fff; margin-top: 50px; padding: 50px 0;">
        <div class="container">
            <div class="section-header">
                <h2 style="color: white">{{ __('about.title-team') }}</h2>
                <a href="#" class="see-more">{{ __('about.voir-plus') }}</a>
            </div>

            <div class="row">
                @foreach ($teams as $item)
                    <div class="col-md-4 col-sm-12">
                        <div class="team-member-card team-member-animated">
                            <img src="{{ $item->getAvatarFullUrl() }}" style="height: 70%; width: 90%; border-radius: 10px" alt="">
                            <h3>{{ $item->name }}</h3>
                            <p class="title-role">{{ $item->role }}</p>
                            <p class="experience">{{ $item->experience }} {{ __('about.experience') }} </p>
                            <a href="{{ route('front.person-biographie', ['item_id' => $item->id, 'slug' => $item->slug]) }}" class="btn btn-outline-light mt-3">
                                {{ __('about.read-more') }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    @include('layouts.partials.footer')

@endsection


@push('scripts')

@endpush
