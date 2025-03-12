@extends('layouts.app')

@section('title', 'Welcome | Impaxis')

@section('content')
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

</style>

<div class="slider-container">
    <div class="slides">
        <div class="slide active" style=" background:#767677B7;">
            <div class="video-container">
                <video autoplay muted loop class="bg-video">
                    <source src="assets/accueil.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container content">
                <h1 class="display-1 animated-text" style="color: #F2920E">IMPAXIS</h1>
                <p class="display-5 animated-text">Votre partenaire financier panafricain pour 
                    <br>des solutions sur mesure</p><br>
                <a href="#" class="btn btn-lg btn-primary animated-btn">En savoir plus</a><br><br>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/notremission.png');">
            <div class="container">
                <h1 class="display-1 text-white">Notre mission</h1>
                <hr style="border: 3px solid #F2920E;width: 100%;">
                <p class="display-5">Suspendisse varius enim in eros elementum tristique.</p><br>
                <a href="#" class="btn btn-lg btn-primary">En savoir plus</a><br><br>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/notrevision.png');">
            <div class="container">
                <h1 class="display-1 text-white">Notre vision</h1>
                <hr style="border: 3px solid #F2920E;width: 100%;">
                <p class="display-5">Suspendisse varius enim in eros elementum tristique.</p><br>
                <a href="#" class="btn btn-lg btn-primary">En savoir plus</a><br><br>
            </div>
        </div>
        <div class="slide" style="background-image: url('assets/nosvaleur.png');">
            <div class="container" style="margin: 0 50px;">
                <h1 class="display-1 text-white" style="color:white;font-family: 'Roboto', sans-serif;">Nos valeurs</h1><br>
                <div class="row">
                    <div class="col-md-2 card" style="font-size:15px;font-family: 'Roboto', sans-serif;">
                        <h3 style="font-family: 'Roboto', sans-serif;font-size:25px;">Excellence</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p style="font-family: 'Roboto', sans-serif;font-size:18px;">Nous nous efforçons d'atteindre l'excellence.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3 style="font-family: 'Roboto', sans-serif;font-size:25px;">Innovation</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p style="font-family: 'Roboto', sans-serif;font-size:18px;">Nous encourageons l'innovation.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3 style="font-family: 'Roboto', sans-serif;font-size:25px;">Partage</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p style="font-family: 'Roboto', sans-serif;font-size:18px;">Nous croyons en la valeur du partage.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3 style="font-family: 'Roboto', sans-serif;font-size:25px;">Éthique</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p style="font-family: 'Roboto', sans-serif;font-size:18px;">Nous adhérons aux normes éthiques.</p>
                    </div>
                    <div class="col-md-2 card">
                        <h3 style="font-family: 'Roboto', sans-serif;font-size:25px;">Audace</h3>
                        <hr style="border: 3px solid #F2920E;width: 100%;margin: 20px auto;">
                        <p style="font-family: 'Roboto', sans-serif;font-size:18px;">Nous faisons preuve d'audace.</p>
                    </div>
                </div><br><br>
            </div>
        </div>    </div>
    <div class="indicators">
        <div class="indicator active" data-index="0"></div>
        <div class="indicator" data-index="1"></div>
        <div class="indicator" data-index="2"></div>
        <div class="indicator" data-index="3"></div>
    </div>
</div>

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
            }, 100); // Petit délai pour un effet fluide

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
}, 10000);

// Appliquer les animations sur la première slide au chargement
document.addEventListener("DOMContentLoaded", updateSlidePosition);

</script>

@endsection
