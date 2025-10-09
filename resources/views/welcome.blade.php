@extends('layouts.guest')

@section('title', 'Welcome | ')

@push('styles')
<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 30px; /* Espacement entre les cartes */
        justify-content: center;
    }

    .card {
        background-color: #333;
        padding: 20px;
        border-radius: 8px;
        width: 18%; /* Largeur de chaque carte pour s'assurer qu'elles soient bien alignées */
        text-align: center;
        margin-bottom: 20px;
        transition: transform 0.3s ease-in-out;
        color: white;
        box-sizing: border-box;
    }

    .card:hover {
        transform: scale(1.05); /* Légère animation au survol */
    }

    .card h3 {
        font-size: 18px;
        color: white;
     }

    .card p {
        font-size: 14px;
        color: white;
        margin-top: 10px;
    }

    .slider-container {
        position: relative;
        width: 100vw;
        height: 90vh;
        overflow: hidden;
    }
    
    .slides {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
        height: 100%;
    }
    
    .slide {
        min-width: 100%;
        height: 100vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        color: white;
        padding-left: 50px;
    }
    
    .video-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }
    
    .bg-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .content {
        position: relative;
        z-index: 2;
    }
    
    .indicators {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        justify-content: center;
    }
    
    .indicator {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        background: white;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .indicator.active {
        background: #F2920E;
    }


    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes zoomIn {
        from {
            transform: scale(0.8);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .animated {
        opacity: 0;
    }

    .animated-text {
        animation: fadeInUp 1s ease-in-out forwards;
    }

    .animated-btn {
        animation: zoomIn 0.8s ease-in-out forwards;
    }

    .animated-hr {
        animation: fadeIn 1s ease-in-out forwards;
    }

    /* .border-white {
        border: 2px solid #fff !important;
    } */

</style>
@endpush

@section('content')
<div class="slider-container">
    <div class="slides">
        <div class="slide active" style=" background:#767677B7;">
            <div class="video-container">
                <video autoplay muted loop class="bg-video">
                    <source src="{{asset('assets/image/slide_1.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container content">
                <h1 class="display-1 animated-text" style="color: #F2920E">IMPAXIS</h1>
                <p class="display-5 animated-text">Votre partenaire financier panafricain pour
                    <br>des solutions sur mesure</p><br>
                    <a href="#" class="btn btn-lg"
                    style="
                        border: none;
                        background-color: transparent;
                        color: #fff;
                        transition: all 0.3s ease;
                        padding: 0.75rem 1.5rem;
                        font-weight: 500;
                        text-transform: uppercase;
                    "
                    onmouseover="this.style.border='2px solid #F2920E'"
                    onmouseout="this.style.border='none'">En savoir plus</a><br><br>
            </div>
        </div>
        {{-- <div class="slide position-relative" style="background-image: url('{{ asset('assets/image/slide_2.jpg') }}'); background-size: cover; background-position: center; height: 100vh;"> --}}
        <div class="slide position-relative" style="background-size: cover; background-position: center; height: 100vh;">

            <!-- Superposition noire -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0,0,0,0.5); z-index: 1;"></div>
            <div class="video-container">
                <video autoplay muted loop class="bg-video">
                    <source src="{{asset('assets/videos/mission-impaxis.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Contenu au-dessus de l’overlay -->
            <div class="container position-relative z-2 text-white">
                <h1 class="display-1" style="color: #ffffff">Notre mission</h1>
                <hr style="border: 0.5px solid #F2920E; width: 100%;">
                <p class="display-5" style="color: #fff">
                    Faire de l’innovation financière et l’excellence opérationnelle des leviers alternatifs de développement de l’Afrique
                    <br><br>
                    Bâtir l’Afrique de demain par l’excellence et l’innovation financière
                </p><br>

            </div>
        </div>
        {{-- <div class="slide position-relative" style="background-image: url('{{ asset('assets/image/slide_3.jpg') }}'); background-size: cover; background-position: center; height: 100vh;"> --}}
        <div class="slide position-relative" style="background-size: cover; background-position: center; height: 100vh;">

            <!-- Superposition noire à 50% -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
            <div class="video-container">
                <video autoplay muted loop class="bg-video">
                    <source src="{{asset('assets/videos/vision-impaxis.mp4')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Contenu au-dessus de l’overlay -->
            <div class="container position-relative z-2 text-white">
                <h1 class="display-1" style="color: #ffffff">Notre vision</h1>
                <hr style="border: 0.5px solid #F2920E; width: 100%;">
                <p class="display-5" style="color: #fff">
                    Être reconnue comme La Banque d’affaires de référence de l’Afrique, meilleure place pour travailler et qui génère une rentabilité durable.
                    <br><br>
                    La Banque d’affaires de référence de l’Afrique, meilleure place pour travailler et qui génère une rentabilité durable.
                </p><br>
                <!-- <a href="#" class="btn btn-lg btn-primary">En savoir plus</a><br><br> -->
            </div>
        </div>
        {{-- <div class="slide position-relative" style="background-image: url('{{ asset('assets/image/slide_4.jpg') }}'); background-size: cover; background-position: center; height: 100vh;"> --}}
        <div class="slide position-relative" style="background-size: cover; background-position: center; height: 100vh;">

            <!-- Superposition noire à 50% -->
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>
            <div class="video-container">
                <video autoplay muted loop class="bg-video">
                    <source src="{{asset('assets/videos/nos-metiers.mov')}}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <!-- Contenu au-dessus de l’overlay -->
            <div class="container position-relative z-2 text-white" style="margin: 0 50px;">
                <h1 class="display-1" style="font-family: 'Roboto', sans-serif; color: #ffffff">Nos métiers</h1><br>

                <div class="row" style="margin-bottom: 20px; padding: 0;">
                    <div class="col-md-2 card border-0 text-white" style="font-size: 16px; font-family: 'Roboto', sans-serif; border: 1px solid #fff !important; background-color: #0000008d;">
                        <h3 style="font-size:25px;">Investment Banking</h3>
                        <hr style="border: 0.5px solid #F2920E;width: 100%; margin: 20px auto;">
                        <!-- Liste à puces -->
                        <ul class="list-group-flush" style="background-color: transparent; color: white; border: none;">
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">Conseil Financier Stratégique</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">Financement de projet</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">Fusion-Acquisition</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">Introduction en bourse </li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">Levée de fonds sur le marché des capitaux</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">Financement structuré</li>
                            {{-- <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 2px;">DCM</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 0px;">Structured & Leveraged Finance</li> --}}
                        </ul>
                        {{-- <p style="font-size:18px;">Nous nous efforçons d'atteindre l'excellence.</p> --}}
                    </div>
                    <div class="col-md-2 card border-0 text-white" style="border: 1px solid #fff !important; background-color: #0000008d;">
                        <h3 style="font-size:25px;">Markets <br><br></h3>
                        <hr style="border: 0.5px solid #F2920E; width: 100%; margin: 20px auto;">
                        <ul class="list-group-flush" style="background-color: transparent; color: white; border: none;">
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Sales & Trading</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">FX & Commodities/ Hedging </li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Produits structurés et dérivés</li>
                            {{-- <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Produits structurés</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Custody</li> --}}
                        </ul>
                        {{-- <p style="font-size:18px;">Nous encourageons l'innovation.</p> --}}
                    </div>
                    <div class="col-md-2 card border-0 text-white" style="border: 1px solid #fff !important; background-color: #0000008d;">
                        <h3 style="font-size:25px;">Gestion d’actifs</h3>
                        <hr style="border: 0.5px solid #F2920E;width: 100%;margin: 20px auto;">
                        <ul class="list-group-flush" style="background-color: transparent; color: white; border: none;">
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Opcvm et Fonds dédiés</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Gestion sous mandat</li>
                            {{-- <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Private Banking</li> --}}
                        </ul>
                        {{-- <p style="font-size:18px;">Nous croyons en la valeur du partage.</p> --}}
                    </div>
                    <div class="col-md-2 card border-0 text-white" style="border: 1px solid #fff !important; background-color: #0000008d;">
                        <h3 style="font-size:25px;">Global Research</h3>
                        <hr style="border: 0.5px solid #F2920E;width: 100%;margin: 20px auto;">
                        <ul class="list-group-flush" style="background-color: transparent; color: white; border: none;">
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Global Macro Economy (Monde / Régions / Pays)</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Global Equity / FI / Benchmarks</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Secteurs</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Produits : Equity / FI</li>
                            <li class="list-group-item" style="background-color: transparent; color: white; border: none; margin-bottom: 8px;">Illiquid assets</li>
                        </ul>
                        {{-- <p style="font-size:18px;">Nous adhérons aux normes éthiques.</p> --}}
                    </div>
                    {{-- <div class="col-md-2 card bg-transparent border-0 text-white">
                        <h3 style="font-size:25px;">Audace</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p style="font-size:18px;">Nous faisons preuve d'audace.</p>
                    </div> --}}
                </div><br><br>
            </div>
        </div>    
    </div>
    <div class="indicators">
        <div class="indicator active" data-index="0"></div>
        <div class="indicator" data-index="1"></div>
        <div class="indicator" data-index="2"></div>
        <div class="indicator" data-index="3"></div>
    </div>
</div>

@endsection


@push('scripts')

<script>
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');

    function updateSlidePosition() {
        slides.forEach((slide, i) => {
            if (i === currentIndex) {
                slide.classList.add('active');

                // Supprime d'abord toutes les animations, puis les réapplique après un petit délai
                slide.querySelectorAll('.animated-text, .animated-btn, .animated-hr').forEach(el => {
                    el.classList.remove('animated-text', 'animated-btn', 'animated-hr');
                    void el.offsetWidth; // Hack pour forcer le reflow (reset l'animation)
                });

                setTimeout(() => {
                    slide.querySelectorAll('h1, p, a, hr').forEach(el => {
                        if (el.tagName === 'H1' || el.tagName === 'P') {
                            el.classList.add('animated-text');
                        } else if (el.tagName === 'A') {
                            el.classList.add('animated-btn');
                        } else if (el.tagName === 'HR') {
                            el.classList.add('animated-hr');
                        }
                    });
                }, 70); // Petit délai pour un effet fluide

            } else {
                slide.classList.remove('active');
            }
        });

        // Mettre à jour les indicateurs
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === currentIndex);
        });

        // Déplacer les slides
        document.querySelector('.slides').style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Gestion des clics sur les indicateurs
    indicators.forEach(indicator => {
        indicator.addEventListener('click', () => {
            currentIndex = parseInt(indicator.getAttribute('data-index'));
            updateSlidePosition();
        });
    });

    // Changement automatique des slides toutes les 8 secondes
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlidePosition();
    }, 8000);

    // Appliquer les animations sur la première slide au chargement
    document.addEventListener("DOMContentLoaded", updateSlidePosition);

</script>
@endpush
