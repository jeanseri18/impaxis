@extends('layouts.app')

@section('title', 'Actualités | ')

@push('styles')
<style>
    .hero-section {
        background-image: url('/assets/image/bg-actualities.jpg'); /* remplace par ton image */
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
        float: right;
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
                <h1 class="display-3 fw-bold page-title">Actualités</h1>
            </div>
        </section>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            @forelse ($actualities as $item)
            <div class="col-md-4 mb-5">
                <a href="{{ route('front.actuality.show', ['item_id' => $item->id, 'slug' => $item->slug]) }}" class="text-decoration-none">
                    <div class="card" style="width: 100%; height: 100%; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                        <img src="{{ $item->getCoverFullUrl() }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: 1.4em">{{ Str::limit($item->title, 45, '...') }}</h5>
                            <p class="card-text">
                                {{ Str::limit($item->content, 100, '...') }} {{-- Limite le contenu à 100 caractères --}}
                            </p>
                        </div>
                        <div class="" style="padding: 15px 25px 15px 25px; position: relative; z-index: 1000; bottom: 0; width: 100%; background-color: #f8f9fa; border-top: 0.5px solid #dee2e6;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="">
                                    <small class="text-muted" style="color: #919191; float: left;">
                                        <i class="bi bi-clock"></i> {{ $item->created_at->diffForHumans(['locale' => 'fr']) }}
                                    </small>
                                </div>
                                <div>
                                    <a href="{{ route('front.actuality.show', ['item_id' => $item->id, 'slug' => $item->slug]) }}" class="card-link btn-read-more">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="row">
                <div class="col-12 text-center mb-4" style="color: #8d8d8c; font-size: 1.2em;">
                    <p>Aucune actualité disponible pour le moment.</p>
                </div>
            </div>
            @endforelse

            @if (!empty($actualities))
                <div class="col-lg-12" style="margin-top: 30px;">
                    <div>
                        {{ $actualities->links('vendor.pagination.bootstrap-5-fr') }}
                    </div>
                </div>
            @endif
            
        </div>
    </div>

    
    @include('layouts.partials.footer')

@endsection


@push('scripts')

@endpush
