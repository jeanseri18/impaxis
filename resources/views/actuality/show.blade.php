@extends('layouts.app')

@section('title', 'Actualités | ')

@push('styles')
<style>
    .hero-section {
        background-image: url('{{ $item->getCoverFullUrl() }}'); /* remplace par ton image */
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
            <div class="col-md-8">
                <h1>{{ $item->title }}</h1>
                <p class="text-justify" style="color: #787878; font-size: 16px;">
                    {!! $item->content !!}
                </p>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <div style="color: #787878; font-size: 14px; font-style: italic;">
                        <a href="{{ route('front.actualities') }}" class="text-decoration-none mt-5"><i class="bi bi-arrow-left"></i> Tous les articles </a>
                    </div>
                    <div style="color: #787878; font-size: 14px; font-style: italic;">
                        <i class="bi bi-clock"></i> {{ $item->created_at->diffForHumans(['locale' => 'fr']) }}
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                <h3>Articles récents</h3>
                @if ($recentActualities->isEmpty())
                    <p style="color: #919191">Aucun article récent disponible.</p>
                @endif
                {{-- Affichage des articles récents --}}
                @foreach ($recentActualities as $item)
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 1em">
                            <a class="text-decoration-none" href="{{ route('front.actuality.show', ['item_id' => $item->id, 'slug' => $item->slug ]) }}">
                                {{ Str::limit($item->title, 80, '...') }}
                            </a> 
                        </h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <div style="color: #919191; font-size: 12px;">
                                <i class="bi bi-clock"></i> {{ $item->created_at->diffForHumans(['locale' => 'fr']) }}
                            </div>
                            <div>
                                <a href="{{ route('front.actuality.show', ['item_id' => $item->id, 'slug' => $item->slug]) }}" class="btn btn-link" style="float: right">Lire plus</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    
    @include('layouts.partials.footer')

@endsection


@push('scripts')

@endpush
