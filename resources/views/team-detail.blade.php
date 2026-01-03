@extends('layouts.guest')

@section('title', 'Notre Equipe | Biographie')

@push('styles')
<style>
    .hero-section {
        background-image: url('/assets/image/bg-epuipes.jpg'); /* remplace par ton image */
        background-size: cover;
        background-position: top;
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


    .photo-bio {
        background-image: url('{{ $item->getAvatarFullUrl() }}'); /* remplace par ton image */
        background-size: cover;
        background-position: center;
        height: 70vh; /* ou 100vh pour plein écran */
        position: relative;
    }

    .text-bio {
        text-align: justify;
    }

    .role {
        color: #686868; 
    }

    .card-bio {
        padding-top: 50px;
        margin-bottom: 50px;
    }
    
    .social-network a {
        color: #4f4f4f;
    }

    .mr-20 {
        margin-left: 20px;
    }

    .block-bio-member {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border: 1.5px solid #f0f0f0;
    }

    @media (max-width: 768px) {
        .page-title {
            font-size: 6vh;
        }

        .block-bio-member {
            flex-direction: column;
        }

        .photo-bio {
            height: 40vh;
            margin-bottom: 20px;
        }

        .mr-20 {
            margin-left: 0;
        }
    }
</style>
@endpush

@section('content')
    <div class="slider-container">
        <!-- Hero Section / Slide -->
        <section class="hero-section d-flex align-items-center justify-content-center text-white">
            <div class="overlay"></div>
            <div class="container "> {{-- position-relative --}}
                <h1 class="display-3 fw-bold page-title">Biographie</h1>
            </div>
        </section>
    </div>

    <div class="container card-bio">
        <div class="row block-bio-member">
            <div class="col-md-4 photo-bio">
                {{-- <img src="{{ $item->getAvatarFullUrl() }}" width="300px" alt=""> --}}
            </div>
            <div class="col-md-8 block-bio d-flex align-items-center">
                <div class="mr-20">
                    <div class="">
                        <div class="" style="margin-top: 20px;">
                            <h2 class="name">{{ $item->name }}</h2>
                            <h4 class="role">{{ $item->role }}</h4>
                        </div>
                        <p class="text-bio">
                            {{ $item->bio }}
                        </p>
                        <div class="social-network">
                            {{-- <a href="javascript:void(0)"><i class="bi bi-linkedin"></i></a>
                            <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
                            <a href="javascript:void(0)"><i class="bi bi-x"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.footer')

@endsection


@push('scripts')

@endpush
