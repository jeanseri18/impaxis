@extends('layouts.app')

@section('title', 'Références | ')

@push('styles')
<style>
    .tab-section {
        padding: 30px 0;
    }
    /* Styles des onglets (similaires à la version Bootstrap) */
    .custom-tabs .nav-link {
        /* color: #fff; */
        /* border: none; */
        border-bottom: 2px solid transparent;
        padding: 10px 20px;
        margin-right: 5px;
        font-weight: bold;
        cursor: pointer; /* Indique que c'est cliquable */
        transition: all 0.3s ease;
    }
    .custom-tabs .nav-link:hover {
        color: #ff9900;
        border-bottom-color: #ff9900;
    }
    .custom-tabs .nav-link.active {
        color: #ff9900;
        background-color: transparent;
        border-bottom-color: #ff9900;
    }

    /* Styles du contenu des onglets */
    .tab-content {
        /* background-color: #f8f9fa; */
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 0 0 8px 8px;
        color: #1c1c1c;
        margin-top: -1px;
        border-top: 1.5px solid #e3e3e3; /* Ligne de séparation en haut */
    }
    .tab-content h4 {
        color: #fff;
        margin-bottom: 15px;
        font-size: 1.5rem;
    }
    /* Cache les panneaux de contenu par défaut, sauf celui qui est actif */
    .tab-pane {
        display: none;
    }
    .tab-pane.active {
        display: block; /* Affiche le panneau actif */
    }
    /* Pour l'animation de fondu (optionnel, nécessite plus de CSS/JS pour être parfait) */
    .tab-pane.fade {
        opacity: 0;
        transition: opacity 0.15s linear;
    }
    .tab-pane.fade.active.show {
        opacity: 1;
    }



    /* Styles spécifiques pour la section financière */
    .financial-section {
        padding: 20px 0;
        background-color: #f8f9fa; /* S'assurer que le fond de la section est clair */
    }
    .financial-item {
        text-align: center;
        margin-bottom: 50px; /* Espace entre chaque bloc d'information */
    }
    .financial-item:last-child {
        margin-bottom: 0; /* Pas de marge en bas pour le dernier élément */
    }
    .financial-item p {
        margin-bottom: 5px; /* Espace réduit sous les paragraphes */
        font-size: 1.1rem;
        color: #555; /* Couleur de texte légèrement plus claire pour les descriptions */
    }
    .financial-item .title {
        font-size: 1.0rem; /* Taille du titre */
        font-weight: bold;
        margin-bottom: 10px;
        color: #343a40; /* Couleur du titre */
    }
    .financial-item .amount {
        font-size: 1.5rem; /* Grande taille pour le montant */
        font-weight: bold;
        color: #343a40;
        margin-top: 20px; /* Espace au-dessus du montant */
        margin-bottom: 5px; /* Espace sous le montant */
    }
    .financial-item .year {
        font-size: 1rem;
        color: #6c757d; /* Couleur de texte pour l'année */
        margin-bottom: 20px; /* Espace sous l'année */
    }
    .financial-item .separator-line {
        width: 150px; /* Largeur de la ligne */
        height: 2px;
        background-color: #adb5bd; /* Couleur grise pour la ligne */
        margin: 20px auto; /* Centrer la ligne et espacement */
    }

    .logo-container {
        text-align: center;
        margin-bottom: 30px; /* Espace entre le logo et les éléments financiers */
    }

    .logo-partener {
        width: auto; /* Largeur maximale du logo */
        height: 70px; /* Hauteur fixe pour les logos */
        max-height: 100px; /* Hauteur automatique pour conserver les proportions */
        margin-bottom: 8px; /* Espace sous le logo */
    }

    /* .card-animated:hover {
        transform: translateY(-5px); Légère élévation au survol
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); Ombre douce
        transition: transform 0.3s ease, box-shadow 0.3s ease; Transition douce
        border: 2px solid #ff9900; Bordure orange au survol
    } */

    .animated-fadeInR {
        animation: fadeInRight 1s ease forwards;
        opacity: 0;
        will-change: opacity, transform;
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(60px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }    
</style>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="my-5">Références</h1>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Références - Marché Financier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Références - Corporate Finance</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTab">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Références - Marché Financier</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Références - Corporate Finance</div>
                </div>

                <center>*********************</center>

                <ul class="nav nav-tabs justify-content-center mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- <section class="tab-section">
        <div class="container">
            <ul class="nav nav-tabs custom-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Onglet 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Onglet 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Onglet 3</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h4>Contenu de l'Onglet 1</h4>
                    <p>Ceci est le contenu de l'onglet numéro un. Vous pouvez y mettre du texte, des images, d'autres composants Bootstrap, etc.</p>
                    <p>Il est important de noter que Bootstrap gère l'affichage/masquage du contenu de manière dynamique grâce au JavaScript.</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h4>Contenu de l'Onglet 2</h4>
                    <p>Voici le contenu de l'onglet numéro deux. Chaque onglet a un ID unique (`#profile`) qui correspond au `href` de son `nav-link`.</p>
                    <p>Assurez-vous que l'attribut `aria-labelledby` dans le `tab-pane` correspond à l'ID de l'onglet correspondant (`id="profile-tab"`).</p>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <h4>Contenu de l'Onglet 3</h4>
                    <p>Ceci est le troisième et dernier onglet. L'attribut `data-toggle="tab"` sur les liens est crucial pour activer le comportement d'onglet de Bootstrap.</p>
                    <p>Le premier onglet a les classes `active` et `show` pour être visible au chargement de la page.</p>
                </div>
            </div>
        </div>
    </section> --}}

    
    <section class="tab-section">
        <div class="container">
            <ul class="nav nav-tabs custom-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-tab-target="#home" role="tab" aria-controls="home" aria-selected="true">Références - Marché Financier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-tab-target="#profile" role="tab" aria-controls="profile" aria-selected="false">Références - Corporate Finance</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane  active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                    {{-- <h4>Nos Références - Marché Financier</h4> --}}

                    <section class="financial-section">
                        <div class="container mb-5">

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card card-animated" style="padding: 20px;" >
                                    <div class="logo-container">
                                        <div class="logo-container">
                                            <img src="{{ asset('/assets/image/logo-partners/nourmony_logo.png') }}" alt="Mourmony Logo" class="logo-partener">
                                        </div>
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L'ÉPARGNE - NOURMONY</p>
                                        <p>7,25% 2024 – 2029</p>
                                        <p class="title">ARRANGEUR CHEF DE FILE</p>
                                        <p class="amount">20 milliards F CFA</p>
                                        <p class="year">en 2025</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card card-animated" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/boad_logo.jpg') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">TITRISATION DES CRÉANCES SOUVERAINES PAR APE - FCTC DOLI-P</p>
                                        <p>9,5% 2024-2031</p>
                                        <p class="title">CO-CHEF DE FILE</p>
                                        <p class="amount">160 milliards F CFA</p>
                                        <p class="year">en 2024</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card card-animated" style="padding: 20px;">
                                    <div class="logo-container"> <!-- style="width: 246px; height: 72px" -->
                                        <img src="{{ asset('/assets/image/logo-partners/bidc-ebid_logo.png') }}" alt="bidc-ebid Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L'ÉPARGNE - GSS Bond BIDC - EBID</p>
                                        <p>6,50% 2024-2031</p>
                                        <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE</p>
                                        <p class="amount">70 milliards F CFA</p>
                                        <p class="year">en 2024</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card card-animated" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/fidelis-finance-logo.jpg') }}" alt="Fidelis finance Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L'ÉPARGNE - FIDELIS FINANCE CAP25</p>
                                        <p>7% 2023-2030</p>
                                        <p class="title">ARRANGEUR CHEF DE FILE</p>
                                        <p class="amount">15 milliards F CFA</p>
                                        <p class="year">en 2023</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        {{-- <img src="{{ asset('/assets/image/logo-partners/default-logo.png') }}" style="width: auto; height: 80px;"alt="Mourmony Logo" class="logo-partener"> --}}
                                        <img src="{{ asset('/assets/image/logo-partners/boad_logo.jpg') }}" alt="BAOD Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">TITRISATION DES CRÉANCES SOUVERAINES PAR APE - FCTC DOLI-P</p>
                                        <p>6,10% 2023-2030</p>
                                        <p class="title">CO-CHEF DE FILE</p>
                                        <p class="amount">150 milliards F CFA</p>
                                        <p class="year">en 2023</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/bidc-ebid_logo.png') }}" alt="bidc-ebid" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - BIDC</p>
                                        <p>5,90% 2022-2029​</p>
                                        <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE </p>
                                        <p class="amount">120 milliards F CFA</p>
                                        <p class="year">en 2022</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        {{-- <img src="{{ asset('/assets/image/logo-partners/bidc-ebid.jpg') }}" alt="Mourmony Logo" class="logo-partener"> --}}
                                        <img src="{{ asset('/assets/image/logo-partners/bidc-ebid_logo.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - BIDC</p>
                                        <p>6,50% 2021-2028​</p>
                                        <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE  </p>
                                        <p class="amount">50 milliards F CFA</p>
                                        <p class="year">en 2022</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/bidc-ebid_logo.png') }}" alt="Bidc-ebid" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - BIDC</p>
                                        <p>5,90% 2022-2029​</p>
                                        <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE </p>
                                        <p class="amount">120 milliards F CFA</p>
                                        <p class="year">en 2021</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/sonatel_logo.png') }}" style="height: 60px;" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - SONATEL</p>
                                        <p>6,50% 2020-2027​​</p>
                                        <p class="title">ARRANGEUR CHEF DE FILE  </p>
                                        <p class="amount">100 milliards F CFA</p>
                                        <p class="year">en 2020</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/bhs-logo.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">1er DIASPORA BONDS DE LA RÉGION​ - BHS</p>
                                        <p>6,25% 2019-2023​​</p>
                                        <p class="title">ARRANGEUR CO-CHEF DE FILE </p>
                                        <p class="amount">20 milliards F CFA</p>
                                        <p class="year">en 2019</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/SENELEC.jpeg') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - SENELEC</p>
                                        <p>6,5% 2018-2025​​</p>
                                        <p class="title">ARRANGEUR CO-CHEF DE FILE </p>
                                        <p class="amount">38 milliards F CFA</p>
                                        <p class="year">en 2018</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/sukuk-etat-du-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                        <p>6% 2016-2026​</p>
                                        <p class="title">CO-CHEF DE FILE </p>
                                        <p class="amount">100 milliards F CFA</p>
                                        <p class="year">en 2016</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/sukuk-etat-du-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                        <p>6% 2016-2026​</p>
                                        <p class="title">CO-CHEF DE FILE </p>
                                        <p class="amount">100 milliards F CFA</p>
                                        <p class="year">en 2016</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/microcred-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">PLACEMENT PRIVÉ - MICROCRED SÉNÉGAL</p>
                                        <p>6,8% 2016-2023​</p>
                                        <p class="title">ARRANGEUR CHEF DE FILE</p>
                                        <p class="amount">3,8 milliards​ F CFA</p>
                                        <p class="year">en 2016</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/sukuk-etat-du-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                        <p>6,30% 2015-2025​</p>
                                        <p class="title">CO-ARRANGEUR CHEF DE FILE </p>
                                        <p class="amount">100 milliards F CFA</p>
                                        <p class="year">en 2015</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/sukuk-etat-du-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                        <p>6,50% 2014-2021​</p>
                                        <p class="title">CO-ARRANGEUR CHEF DE FILE</p>
                                        <p class="amount">119 milliards F CFA</p>
                                        <p class="year">en 2014</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/boad_logo.jpg') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">APPEL PUBLIC À L’ÉPARGNE - BONS BOAD</p>
                                        <p> 2014-2021​​</p>
                                        <p class="title">AGENT PLACEUR </p>
                                        <p class="amount">50 milliards F CFA</p>
                                        <p class="year">en 2014</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>


                            {{-- <div class="logo-container">
                                <img src="{{ asset('/assets/image/logo-partners/nourmony.png') }}" alt="Mourmony Logo" class="logo-partener">
                            </div>
                            <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L'ÉPARGNE - NOURMONY</p>
                                <p>7,25% 2024 – 2029</p>
                                <p class="title">ARRANGEUR CHEF DE FILE</p>
                                <p class="amount">20 milliards F CFA</p>
                                <p class="year">en 2025</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="logo-container">
                                <img src="{{ asset('/assets/image/logo-partners/kf_titrisation.png') }}" alt="Mourmony Logo" class="logo-partener">
                            </div>
                            <div class="financial-item">
                                <p class="title">TITRISATION DES CRÉANCES SOUVERAINES PAR APE - FCTC DOLI-P</p>
                                <p>9,5% 2024-2031</p>
                                <p class="title">CO-CHEF DE FILE</p>
                                <p class="amount">160 milliards F CFA</p>
                                <p class="year">en 2024</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="logo-container">
                                <img src="{{ asset('/assets/image/logo-partners/bidc-ebid.jpg') }}" alt="Mourmony Logo" class="logo-partener">
                            </div>
                            <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L'ÉPARGNE - GSS Bond BIDC - EBID</p>
                                <p>6,50% 2024-2031</p>
                                <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE</p>
                                <p class="amount">70 milliards F CFA</p>
                                <p class="year">en 2024</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="logo-container">
                                <img src="{{ asset('/assets/image/logo-partners/fidelis-finance.jpeg') }}" alt="Mourmony Logo" class="logo-partener">
                            </div>
                            <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L'ÉPARGNE - FIDELIS FINANCE CAP25</p>
                                <p>7% 2023-2030</p>
                                <p class="title">ARRANGEUR CHEF DE FILE</p>
                                <p class="amount">15 milliards F CFA</p>
                                <p class="year">en 2023</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">TITRISATION DES CRÉANCES SOUVERAINES PAR APE - FCTC DOLI-P</p>
                                <p>6,10% 2023-2030</p>
                                <p class="title">CO-CHEF DE FILE</p>
                                <p class="amount">150 milliards F CFA</p>
                                <p class="year">en 2023</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - BIDC</p>
                                <p>5,90% 2022-2029​</p>
                                <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE </p>
                                <p class="amount">120 milliards F CFA</p>
                                <p class="year">en 2022</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - BIDC</p>
                                <p>6,50% 2021-2028​</p>
                                <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE  </p>
                                <p class="amount">50 milliards F CFA</p>
                                <p class="year">en 2022</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - BIDC</p>
                                <p>5,90% 2022-2029​</p>
                                <p class="title">ARRANGEUR PRINCIPAL CHEF DE FILE </p>
                                <p class="amount">120 milliards F CFA</p>
                                <p class="year">en 2021</p>
                                {{-- <div class="separator-line"></div> 
                            </div> 
                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - SONATEL</p>
                                <p>6,50% 2020-2027​​</p>
                                <p class="title">ARRANGEUR CHEF DE FILE  </p>
                                <p class="amount">100 milliards F CFA</p>
                                <p class="year">en 2020</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            
                            {{-- <div class="financial-item">
                                <p class="title">1er DIASPORA BONDS DE LA RÉGION​ - BHS</p>
                                <p>6,25% 2019-2023​​</p>
                                <p class="title">ARRANGEUR CO-CHEF DE FILE </p>
                                <p class="amount">20 milliards F CFA</p>
                                <p class="year">en 2019</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - SENELEC</p>
                                <p>6,5% 2018-2025​​</p>
                                <p class="title">ARRANGEUR CO-CHEF DE FILE </p>
                                <p class="amount">38 milliards F CFA</p>
                                <p class="year">en 2018</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                <p>6% 2016-2026​</p>
                                <p class="title">CO-CHEF DE FILE </p>
                                <p class="amount">100 milliards F CFA</p>
                                <p class="year">en 2016</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                <p>6,30% 2015-2025​</p>
                                <p class="title">CO-ARRANGEUR CHEF DE FILE </p>
                                <p class="amount">100 milliards F CFA</p>
                                <p class="year">en 2015</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - SUKUK ETAT DU SÉNÉGAL</p>
                                <p>6,50% 2014-2021​</p>
                                <p class="title">CO-ARRANGEUR CHEF DE FILE</p>
                                <p class="amount">119 milliards F CFA</p>
                                <p class="year">en 2014</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">APPEL PUBLIC À L’ÉPARGNE - BONS BOAD</p>
                                <p> 2014-2021​​</p>
                                <p class="title">AGENT PLACEUR </p>
                                <p class="amount">50 milliards F CFA</p>
                                <p class="year">en 2014</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                        </div>
                    </section>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    {{-- <h4>Nos Références - Corporate Finance</h4> --}}
                    
                    <section class="financial-section">
                        <div class="container">

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/hopital-international-dakar.jpeg') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">STRUCTURATION ET LEVÉE DE FONDS POUR CONSTRUCTION HÔPITAL AMBULATOIRE</p>
                                        <p class="title">ARRANGEUR & CONSEIL</p>
                                        <p class="amount">26 milliards​ F CFA</p>
                                        <p class="year">HÔPITAL INTERNATIONAL DE DAKAR</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/aeroport-intenational-dakar.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">FINANCEMENT</p>
                                        <p class="title">ARRANGEUR</p>
                                        <p class="amount">2 milliards F CFA</p>
                                        <p class="year">ADS (AÉROPORTS DU SÉNÉGAL)</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/aire-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">FINANCEMENT</p>
                                        <p class="title">ARRANGEUR</p>
                                        <p class="amount">13,5 milliards F CFA</p>
                                        <p class="year">SÉNÉGAL AIRLINES</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/clubmed.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">FINANCEMENT DE CLUB MED AFRIQUE DE L’OUEST</p>
                                        <p class="title">CONSEIL & ARRANGEUR</p>
                                        <p class="amount">63 milliards F CFA</p>
                                        <p class="year">CLUB MED AFRIQUE DE L’OUEST</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/aire-senegal.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">RESTRUCTURATION DE DETTE</p>
                                        <p class="title">CO-CHEF DE FILE</p>
                                        <p class="amount">4 milliards F CFA</p>
                                        <p class="year">AIR SENEGAL</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/aftu.jpeg') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">ACQUISITION DE 700 MINI BUS</p>
                                        <p class="title">ARRANGEUR </p>
                                        <p class="amount">13,5 milliards F CFA</p>
                                        <p class="year">AFTU</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/china-exim-bank.jpeg') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">ACQUISITION DE 700 MINI BUS</p>
                                        <p class="title">ARRANGEUR</p>
                                        <p class="amount">160 milliards F CFA< p>
                                        <p class="year">CHINA EXIM BANK</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/default-logo.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">FINANCEMENT ACQUISITION DE 100% DU CAPITAL</p>
                                        <p class="title">CO-CHEF DE FILE</p>
                                        <p class="amount">Confidentiel</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/sar.png') }}" alt="Mourmony Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">FINANCEMENT ET FONDS DE ROULEMENT</p>
                                        <p class="title">ARRANGEUR</p>
                                        <p class="amount">20 millions EURO</p>
                                        <p class="year">SAR – SOCIÉTÉ AFRICAINE DE RAFFINAGE</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/rts.png') }}" alt="RTS Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">ACQUISITION ÉQUIPEMENT AUDIOVISUEL</p>
                                        <p class="title">ARRANGEUR</p>
                                        <p class="amount">4,2 milliards F CFA</p>
                                        <p class="year">RTS</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/engen-guinee-bissau.png') }}" alt="RTS Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">ACQUISITION FINANCEMENT D’ENGEN GUINÉE-BISSAU​</p>
                                        <p class="title">CONSEIL</p>
                                        <p class="amount">Confidentiel</p>
                                        <p class="year">ENGEN GUINÉE-BISSAU​</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/essarts-participations.png') }}" alt="RTS Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">ACQUISITION DE BUHAN & TEISSEIRE PAR ESSARTS PARTICIPATIONS​</p>
                                        <p class="title">CONSEIL </p>
                                        <p class="amount">Confidentiel</p>
                                        <p class="year">ESSARTS PARTICIPATIONS​</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 animatedInRight">
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/default-logo.png') }}" alt="RTS Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">LBO 100% DE SIFI, HOLDING DE ELTON OIL ET SENBUS INDUSTRIES​​</p>
                                        <p class="title">ARRANGEUR & CONSEIL</p>
                                        <p class="amount">Confidentiel</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/clubmed.png') }}" alt="RTS Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">LBO, ACQUISITION DE CLUB MED PAR DES PRIVÉS SÉNÉGALAIS​​</p>
                                        <p class="title">ARRANGEUR & CONSEIL</p>
                                        <p class="amount">Confidentiel</p>
                                        <p class="year">CLUB MED</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 card" style="padding: 20px;">
                                    <div class="logo-container">
                                        <img src="{{ asset('/assets/image/logo-partners/vacap-world.png') }}" alt="RTS Logo" class="logo-partener">
                                    </div>
                                    <div class="financial-item">
                                        <p class="title">LBO, ACQUISITION SSRT POUR VACAP​</p>
                                        <p class="title">ARRANGEUR & CONSEIL</p>
                                        <p class="amount">Confidentiel</p>
                                        <p class="year">VACAP WORLD</p>
                                        {{-- <div class="separator-line"></div> --}}
                                    </div>
                                </div>
                                <div class="col-md-3 " style="padding: 20px;"></div>
                            </div>


                            {{-- <div class="financial-item">
                                <p class="title">STRUCTURATION ET LEVÉE DE FONDS POUR CONSTRUCTION HÔPITAL AMBULATOIRE</p>
                                <p class="title">ARRANGEUR & CONSEIL</p>
                                <p class="amount">26 milliards​ F CFA</p>
                                <p class="year">HÔPITAL INTERNATIONAL DE DAKAR</p>
                                {{-- <div class="separator-line"></div>
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">FINANCEMENT</p>
                                <p class="title">ARRANGEUR</p>
                                <p class="amount">2 milliards F CFA</p>
                                <p class="year">ADS (AÉROPORTS DU SÉNÉGAL)</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">FINANCEMENT</p>
                                <p class="title">ARRANGEUR</p>
                                <p class="amount">13,5 milliards F CFA</p>
                                <p class="year">SÉNÉGAL AIRLINES</p>
                                {{-- <div class="separator-line"></div>
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">FINANCEMENT DE CLUB MED AFRIQUE DE L’OUEST</p>
                                <p class="title">CONSEIL & ARRANGEUR</p>
                                <p class="amount">63 milliards F CFA</p>
                                <p class="year">CLUB MED AFRIQUE DE L’OUEST</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">RESTRUCTURATION DE DETTE</p>
                                <p class="title">CO-CHEF DE FILE</p>
                                <p class="amount">4 milliards F CFA</p>
                                <p class="year">AIR SENEGAL</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">ACQUISITION DE 700 MINI BUS</p>
                                <p class="title">ARRANGEUR </p>
                                <p class="amount">13,5 milliards F CFA</p>
                                <p class="year">AFTU</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">ACQUISITION DE 700 MINI BUS</p>
                                <p class="title">ARRANGEUR</p>
                                <p class="amount">160 milliards F CFA</p>
                                <p class="year">CHINA EXIM BANK</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">FINANCEMENT ACQUISITION DE 100% DU CAPITAL</p>
                                <p class="title">CO-CHEF DE FILE</p>
                                <p class="amount">Confidentiel</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                            {{-- <div class="financial-item">
                                <p class="title">FINANCEMENT ET FONDS DE ROULEMENT</p>
                                <p class="title">ARRANGEUR</p>
                                <p class="amount">20 millions EURO</p>
                                <p class="year">SAR – SOCIÉTÉ AFRICAINE DE RAFFINAGE</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            
                            {{-- <div class="financial-item">
                                <p class="title">ACQUISITION ÉQUIPEMENT AUDIOVISUEL</p>
                                <p class="title">ARRANGEUR</p>
                                <p class="amount">4,2 milliards F CFA</p>
                                <p class="year">RTS</p>
                                {{-- <div class="separator-line"></div>
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">ACQUISITION FINANCEMENT D’ENGEN GUINÉE-BISSAU​</p>
                                <p class="title">CONSEIL</p>
                                <p class="amount">Confidentiel</p>
                                <p class="year">ENGEN GUINÉE-BISSAU​</p>
                                <div class="separator-line"></div> 
                            </div> 
                            {{-- <div class="financial-item">
                                <p class="title">ACQUISITION DE BUHAN & TEISSEIRE PAR ESSARTS PARTICIPATIONS​</p>
                                <p class="title">CONSEIL </p>
                                <p class="amount">Confidentiel</p>
                                <p class="year">ESSARTS PARTICIPATIONS​</p>
                                {{-- <div class="separator-line"></div> --}}
                            </div> 

                            {{-- <div class="financial-item">
                                <p class="title">LBO 100% DE SIFI, HOLDING DE ELTON OIL ET SENBUS INDUSTRIES​​</p>
                                <p class="title">ARRANGEUR & CONSEIL</p>
                                <p class="amount">Confidentiel</p>
                                {{-- <div class="separator-line"></div> --}}
                            </div> 
                            {{-- <div class="financial-item">
                                <p class="title">LBO, ACQUISITION DE CLUB MED PAR DES PRIVÉS SÉNÉGALAIS​​</p>
                                <p class="title">ARRANGEUR & CONSEIL</p>
                                <p class="amount">Confidentiel</p>
                                <p class="year">CLUB MED</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}
                            {{-- <div class="financial-item">
                                <p class="title">LBO, ACQUISITION SSRT POUR VACAP​</p>
                                <p class="title">ARRANGEUR & CONSEIL</p>
                                <p class="amount">Confidentiel</p>
                                <p class="year">VACAP WORLD</p>
                                {{-- <div class="separator-line"></div> 
                            </div> --}}

                        </div>
                    </section>
                    
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.footer')

@endsection


@push('scripts')

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabLinks = document.querySelectorAll('.custom-tabs .nav-link');
            const tabPanes = document.querySelectorAll('.tab-content .tab-pane');

            // Fonction pour désactiver tous les onglets et masquer tous les contenus
            function deactivateAllTabs() {
                tabLinks.forEach(link => {
                    link.classList.remove('active');
                    link.setAttribute('aria-selected', 'false');
                });
                tabPanes.forEach(pane => {
                    pane.classList.remove('active', 'show');
                });
            }

            // Ajoute un écouteur d'événements à chaque lien d'onglet
            tabLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Empêche le comportement par défaut du lien (rechargement de la page)

                    // 1. Désactiver tous les onglets et contenus
                    deactivateAllTabs();

                    // 2. Activer l'onglet cliqué
                    this.classList.add('active');
                    this.setAttribute('aria-selected', 'true');

                    // 3. Afficher le contenu correspondant
                    const targetId = this.dataset.tabTarget; // Récupère l'ID du contenu depuis l'attribut data-tab-target
                    const targetPane = document.querySelector(targetId);

                    if (targetPane) {
                        targetPane.classList.add('active'); // Rend le panneau visible
                        // Pour l'animation de fondu, ajoute 'show' après un petit délai
                        setTimeout(() => {
                            targetPane.classList.add('show');
                        }, 10); // Petit délai pour laisser le temps au navigateur de reconnaître 'active' avant 'show'
                    }
                });
            });

            // Active le premier onglet et son contenu au chargement initial
            // Si tu veux qu'un onglet spécifique soit actif par défaut, tu peux l'appeler ici
            // Ou t'assurer que les classes 'active' et 'show' sont déjà dans le HTML
            // Si le HTML est déjà configuré avec 'active' sur un onglet, cette partie n'est pas strictement nécessaire
            // mais c'est une bonne pratique si tu veux une logique d'initialisation en JS.
            // Par défaut, nous avons déjà configuré le premier onglet en HTML.
        });
    </script>

    <script>
        window.addEventListener('scroll', function() {
            const animatedCards = document.querySelectorAll('.animatedInRight');
            animatedCards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top < window.innerHeight && rect.bottom > 0) {
                card.classList.add('animated-fadeInR');
            } else {
                card.classList.remove('animated-fadeInR');
            }
            });
        });
    </script>

@endpush
