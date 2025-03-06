@extends('layouts.app')

@section('title', 'Welcome | Impaxis')

@section('content')

<style>
    body {
        background-color: #222;
        color: white;
        font-family: Arial, sans-serif;
        font-size: 1rem;
        margin: 0;
        overflow: hidden;
    }

    .slider-container {
        width: 100%;
        height: 100vh;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .slides {
        width: 100%;
        height: 100vh;
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide {
        min-width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        opacity: 0; /* Par défaut, les slides sont cachées */
        transform: scale(0.8);
        position: absolute; /* Superposer les slides */
        width: 100%;
        transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    /* Afficher la slide active correctement */
    .slide.active {
        opacity: 1 !important;
        transform: scale(1);
        position: relative;
    }

    /* Animation pour les éléments à l'intérieur des slides (textes, boutons) */
    .slide .container,
    .slide .container h1,
    .slide .container p,
    .slide .container a {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 2s ease-in-out, transform 2s ease-in-out;
    }

    .slide.active .container,
    .slide.active .container h1,
    .slide.active .container p,
    .slide.active .container a {
        opacity: 1;
        transform: translateY(0);
    }

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

    .slide:nth-child(1) {
    background-image: url("assets/accueil.png");
}
.slide:nth-child(2) {
    background-image: url("assets/notremission.png");
}
.slide:nth-child(3) {
    background-image: url("assets/notrevision.png");
}
.slide:nth-child(4) {
    background-image: url("assets/nosvaleur.png");
}
    /* Indicateurs verticaux */
    .indicators {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 10;
    }

    .indicator {
        width: 12px;
        height: 12px;
        background-color: gray;
        border-radius: 50%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .indicator.active {
        background-color: white;
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

</style>

<div class="slider-container">
    <div class="slides">
        <div class="slide active">
            <div class="container">
                <h1 class="display-3" style="color:#F2920E;font-size:65px">IMPAXIS</h1> 
                <p>Votre partenaire financier panafricain pour des solutions sur mesure</p>
                <a href="#" class="btn" style="background-color:#1A2C45;color:white">En savoir plus</a>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <h1 style="font-size:65px;color:white">Notre mission</h1>
                <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                <p>Suspendisse varius enim in eros elementum tristique.</p>
                <a href="#" class="btn" style="background-color:#1A2C45;color:white">En savoir plus</a>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <h1 style="font-size:65px;color:white">Notre vision</h1>
                <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                <p>Suspendisse varius enim in eros elementum tristique.</p>
                <a href="#" class="btn" style="background-color:#1A2C45;color:white">En savoir plus</a>
            </div>
        </div>
        <div class="slide">
            <div class="container">
                <h1 style="font-size:65px;color:white">Nos valeurs</h1>
                <div class="row">
                    <div class="col-md-2 card" style="font-size:15px;">
                        <h3>Excellence</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p>Nous nous efforçons d'atteindre l'excellence.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3>Innovation</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p>Nous encourageons l'innovation.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3>Partage</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p>Nous croyons en la valeur du partage.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3>Éthique</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p>Nous adhérons aux normes éthiques.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3>Audace</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p>Nous faisons preuve d'audace.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicateurs -->
    <div class="indicators">
        <div class="indicator active"></div>
        <div class="indicator" ></div>
        <div class="indicator" ></div>
        <div class="indicator" ></div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');

    function goToSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            slide.style.animation = ""; // Supprime l'animation précédente
        });

        slides[index].classList.add('active');
        slides[index].style.animation = "zoomIn 1s ease-in-out"; // Relancer l'animation

        indicators.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });

        currentIndex = index;
    }

    // Ajout des événements sur les indicateurs
    indicators.forEach((dot, i) => {
        dot.addEventListener('click', () => {
            goToSlide(i);
        });
    });

    // Défilement automatique toutes les 10 secondes
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        goToSlide(currentIndex);
    }, 10000);

    goToSlide(0);
});

</script>

@endsection
