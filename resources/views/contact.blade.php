@extends('layouts.guest')

@section('title', 'Contact | ')

@push('styles')
<style>
    .hero-section {
        background-image: url('/assets/image/contact-impaxis-head-bg.jpg'); /* remplace par ton image */
        background-size: cover;
        /* background-position: center; */
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


    .contact-info p {
        margin-bottom: 0px;
        font-size: 16px;
    }

    .contact-info i {
        color: #ffffff; /* Couleur orange pour les icônes */
        margin-right: 10px;
    }

    .contact-info a {
        color: #007bff; /* #007bff; Couleur bleue pour les liens */
        text-decoration: none;
    }

    .contact-info a:hover {
        text-decoration: underline;
    }

    .icon {
        display: flex;
        align-items: center;
        justify-content: center;
        /* display: flex; justify-content: center; align-items: center; */
        align-items: center;
        font-size: 15px;
        margin: 3px 10px 10px 10px;
        padding: 10px;
        /* color: #ffffff; Couleur orange pour les icônes */
        background-color: #ff9900; /* Couleur orange pour les icônes */
        border-radius: 50%;
        width: 30px;
        height: 30px;
    }

    .info-inline {
        display: flex;
        /* gap: 10px; */
        align-items: center;
        /* justify-content: space-between; */
    }

    .text-5 {
        font-size: 14px;
        align-items: center;
    }

    @media (max-width: 768px) {
        .hero-section {
            height: 40vh; /* Ajuste la hauteur pour les petits écrans */
        }

        .page-title {
            font-size: 6vh;
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
                <h1 class="display-3 fw-bold page-title">{{ __('contact.page-title') }}</h1>
            </div>
        </section>
    </div>

    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.279877085147!2d-17.470906298920998!3d14.696758304031952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec1729a8afb3b95%3A0xdc352c7b6f794677!2sFann%20R%C3%A9sidence%2C%20170%20Av.%20des%20Ambassadeurs%2C%20Dakar%2010700%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sci!4v1760378963450!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 4em; margin-bottom: 4em;">
            <div class="col-md-6">
                <h2>{{ __('contact.title-1') }}</h2>
                <div class="card">
                    <div class="card-body">
                        <h4>{{ __('contact.siege-groupe') }}</h4>
                        <div class="contact-info">
                            <p class="">
                                <div class="info-inline ">
                                    <div class="icon"><i class="bi bi-geo-alt" style="margin-left: 10px"></i></div>
                                    <div class="text-5">Fann Résidence rue Aimé Césaire x Corniche Villa 103. BP 45545 Dakar – SENEGAL</div>
                                </div>
                            </p>
                            <p>
                                <div class="info-inline ">
                                    <div class="icon"><i class="bi bi-phone" style="margin-left: 10px"></i></div>
                                    <div class="text-5"><a href="tel:+221338693140">(+221) 33 869 3140</a></div>
                                </div>
                            </p>
                            <p>
                                <div class="info-inline ">
                                    <div class="icon"><i class="bi bi-envelope-at" style="margin-left: 10px"></i></div>
                                    <div class="text-5"><a href="mailto:serviceclient@impaxis-securities.com">serviceclient@impaxis-securities.com</a></div>
                                </div>
                            </p>
                        </div>
                    </div>
                    <center><hr class="my-0" style="border-top: 1px solid #e4e4e4; justify-content: center; width: 90%;"></center>
                    <div class="card-body">
                        <h4>{{ __('contact.bureau') }}</h4>
                        <div class="contact-info">
                            <p class="">
                                <div class="info-inline ">
                                    <div class="icon"><i class="bi bi-geo-alt" style="margin-left: 10px"></i></div>
                                    <div class="text-5">Plateau - Bd Delafosse x Rue Alphonse Daudet – Entrée B – 6ème étage, Abidjan, Côte d'Ivoire</div>
                                </div>
                            </p>
                            <p>
                                <div class="info-inline ">
                                    <div class="icon"><i class="bi bi-globe" style="margin-left: 10px"></i></div>
                                    <div class="text-5">Dubaï</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h2>{{ __('contact.title-2') }}</h2>

                <div id="globalResponseMessage" class="mt-3"></div>

                <form method="POST" action="{{ route('front.contact.send-mail') }}" class="row mt-2" id="contactForm">
                    
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">{{ __('contact.fullname') }}</label>
                                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="{{ __('contact.fullname') }}">
                                <div class="invalid-feedback" id="fullname-error"></div> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">{{ __('contact.tel') }}</label>
                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="(+221) 00 0000 0000">
                                <div class="invalid-feedback" id="phone-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="exemple@domaine.tld">
                                <div class="invalid-feedback" id="email-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="messageContent" class="form-control" id="message" rows="4" placeholder="{{ __('contact.message-text') }}"></textarea>
                                <div class="invalid-feedback" id="messageContent-error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" id="submitBtn">{{ __('contact.btn-send') }}</button> 
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
    
    @include('layouts.partials.footer')

@endsection


@push('scripts')
@endpush
