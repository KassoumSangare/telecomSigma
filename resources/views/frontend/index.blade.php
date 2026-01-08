@extends('frontend.layout.base')

@section('title','Acceuil')
@section('content')
<!-- header -->

<!-- slog -->
<section class="hero-section position-relative overflow-hidden d-flex align-items-center">
    <img src="{{ asset('assets/images/antenne-hero.png') }}" alt="Antenne TicAfrique" class="hero-bg-img">
    <div class="hero-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center justify-content-start text-white">
            <div class="col-lg-8 col-md-10 text-center text-md-start">
                <span class="hero-subtitle mb-3 d-block animate__animated animate__fadeInUp">
                    TICAFRIQUE : Connectivité & Solutions IT
                </span>
                <h1 class="hero-title display-2 fw-bold mb-4 animate__animated animate__fadeInUp animate__delay-0-5s">
                    Votre <span class="text-primary">Connexion</span>, Notre Expertise
                </h1>
                <p class="lead mb-5 hero-description animate__animated animate__fadeInUp animate__delay-1s">
                    Profitez d'une connexion internet rapide et fiable, même dans les zones les plus reculées.
                    TICAFRIQUE déploie des infrastructures de pointe pour optimiser la performance de votre entreprise.
                </p>
                <div class="hero-cta-buttons animate__animated animate__fadeInUp animate__delay-1-5s">
                    <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 me-3 shadow-lg">
                        Obtenir un devis <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="#produits" class="btn btn-outline-light btn-lg rounded-pill px-5 shadow-lg">
                        Nos solutions <i class="bi bi-box-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end slog -->

<!-- slide -->

<section class="services-refonte" id="produits">
    <img src="{{ asset('assets/images/antennes.jpg') }}" alt="Background" class="html-bg-image">

    <div class="bg-overlay"></div>

    <div class="container">
        <div class="section-title text-center mb-5 text-white">
            <h2 class="fw-bold">Nos Solutions & Expertises</h2>
            <div class="header-line mx-auto"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/telephonie_entreprise.jpg') }}" alt="VoIP">
                    </div>
                    <div class="card-body">
                        <h4><a href="telephonieentreprise">Téléphonie d’entreprise</a></h4>
                        <p>Expertise complète pour optimiser vos projets télécom : étude, installation et maintenance.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/autocom.jpg') }}" alt="Autocom">
                    </div>
                    <div class="card-body">
                        <h4><a href="autocomip">Autocoms IP</a></h4>
                        <p>Continuité de service garantie. Connexion hybride : analogique, RNIS, GSM et VoIP.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/paserelle.jpg') }}" alt="Passerelle">
                    </div>
                    <div class="card-body">
                        <h4><a href="passerellegsm">Passerelle GSM</a></h4>
                        <p>Disponibilité accrue, réduction drastique des coûts et qualité d'écoute supérieure.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/antennes.jpg') }}" alt="Antennes">
                    </div>
                    <div class="card-body">
                        <h4><a href="antenne">Antennes</a></h4>
                        <p>Solutions conçues pour améliorer la réception et réduire vos frais de communication.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/connectivite1.jpg') }}" alt="Connectivité">
                    </div>
                    <div class="card-body">
                        <h4><a href="connectivite">Connectivité</a></h4>
                        <p>Stabilité réseau mobile et internet garantie, peu importe votre situation géographique.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/conseil.jpg') }}" alt="Conseils">
                    </div>
                    <div class="card-body">
                        <h4><a href="conseilpersonnalise">Conseils</a></h4>
                        <p>Accompagnement de la rédaction du cahier des charges jusqu'au choix final des solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="service-card">
                    <div class="card-thumb">
                        <img src="{{ asset('assets/images/installation1.jpg') }}" alt="Maintenance">
                    </div>
                    <div class="card-body">
                        <h4><a href="installationetmaintenance">Installation & Maintenance</a></h4>
                        <p>Service complet de déploiement et de dépannage pour tous vos équipements critiques.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end slide -->

<!-- connexion assurer -->
<section class="split-bg-section">
    <img src="{{ asset('assets/images/vignette2.png') }}" alt="Connectivité TICAFRIQUE" class="html-background-img">

    <div class="split-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center min-vh-75">

            <div class="col-lg-6 d-none d-lg-flex justify-content-center">
                <div class="floating-icon-box">
                    <i class="bi bi-broadcast text-info display-1"></i>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="content-card-glass">
                    <span class="badge rounded-pill bg-info text-dark mb-3 px-3 py-2 fw-bold">
                        <i class="bi bi-signal me-2"></i>CONNEXION INTERNET ASSURÉE
                    </span>

                    <h2 class="display-5 fw-bold text-white mb-4">
                        Où que vous vous <span class="text-info">trouviez</span>
                    </h2>

                    <div class="content-text text-white-50">
                        <p class="mb-3">
                            Ce service est destiné aux entreprises et organisations installées à la campagne ou dans une zone mal desservie par les fournisseurs d’accès internet.
                        </p>
                        <p class="mb-3">
                            <strong class="text-white">TICAFRIQUE</strong>, de par son expérience, dispose d’une expertise dans la mise en place de la connexion internet pour les zones non couvertes.
                        </p>
                        <p class="mb-4">
                            Les cas réussis dans les carrières et zones industrielles démontrent la maturité et la solidité de la technologie déployée.
                        </p>
                    </div>

                    <div class="btn-group-custom">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-info btn-lg rounded-pill px-5 fw-bold shadow">
                            Nous contacter <i class="bi bi-arrow-right-short ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end connexion  -->

<!-- Nos engagements -->
<section class="corporate-identity-section">
    <img src="assets/img/background-mission.jpg" alt="Fond Corporate" class="bg-html-asset">

    <div class="identity-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row g-4 justify-content-center">

            <div class="col-lg-4 col-md-6">
                <div class="identity-card h-100">
                    <div class="icon-shape mb-4">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h4 class="title text-white fw-bold mb-3">Notre Mission</h4>
                    <p class="text-white-50">
                        Utiliser les Technologies de l’information et de la communication pour optimiser la performance des entreprises, organisations et particuliers.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="identity-card h-100 active">
                    <div class="icon-shape mb-4">
                        <i class="bi bi-eye "></i>
                    </div>
                    <h4 class="title text-white fw-bold mb-3">Notre Vision</h4>
                    <p class="text-white-50">
                        Optimiser la performance des entreprises, organisations et particuliers à travers des solutions technologiques de pointe et un accompagnement sur mesure.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="identity-card h-100">
                    <div class="icon-shape mb-4">
                        <i class="bi bi-gem"></i>
                    </div>
                    <h4 class="title text-white fw-bold mb-3">Nos Valeurs</h4>
                    <ul class="list-unstyled text-white-50 mb-0">
                        <li class="mb-2">
                            <strong class="text-info">Professionnalisme :</strong> Assurer un service de qualité et répondre aux attentes de nos clients.
                        </li>
                        <li>
                            <strong class="text-info">Innovation :</strong> Procurer des solutions novatrices et explorer de nouvelles pistes de satisfaction.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end engagements -->

<!-- testimonial -->
<style>
    /* Conteneur principal */
    #testimonial-carousel {
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    /* Le "rail" qui contient les cartes */
    .testimonial-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
    }

    /* Chaque carte doit prendre 100% de la largeur du conteneur */
    .testimonial-card {
        flex: 0 0 100%;
        padding: 10px;
        /* Petit espacement pour ne pas toucher les bords */
        box-sizing: border-box;
    }

    /* Conteneur des points (dots) */
    .carousel-dots {
        display: flex;
        justify-content: center;
        gap: 8px;
        margin-top: 20px;
    }

    .dot {
        width: 12px;
        height: 12px;
        background: #ccc;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        transition: background 0.3s;
    }

    .dot.active {
        background: #00b4ff;
        /* Votre couleur bleu */
    }
</style>
<section class="trust-area py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6">
                <div class="testimonial-side">
                    <h2 class="section-title mb-4">
                        <i class="bi bi-chat-quote text-primary me-2"></i>Clients satisfaits
                    </h2>

                    <div class="testimonial-carousel" id="testimonial-carousel">

                        <div class="testimonial-card">
                            <div class="quote-content">
                                <p>"TICAFRIQUE s’appuie sur le respect des valeurs qu’elle défend. Avec eux, c'est l'assurance d'optimiser votre performance réelle."</p>
                            </div>
                            <div class="client-info">
                                <img src="{{ asset('assets/images/logoticafrique.png') }}" alt="TICAFRIQUE" class="client-logo">
                                <div>
                                    <h5 class="mb-0">TICAFRIQUE</h5>
                                    <small class="text-primary">Optimisez votre performance</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="quote-content">
                                <p>"Pleine satisfaction depuis que nous collaborons avec eux. Les installations télécoms et la maintenance informatique nous rassurent au quotidien."</p>
                            </div>
                            <div class="client-info">
                                <img src="{{ asset('assets/images/FOANI.png') }}" alt="FOANI" class="client-logo">
                                <div>
                                    <h5 class="mb-0">FOANI</h5>
                                    <small class="text-primary">Le vrai goût du poulet</small>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-card">
                            <div class="quote-content">
                                <p>"Nous avons apprécié l’expertise, la disponibilité et la qualité des interventions des équipes techniques de TICAFRIQUE."</p>
                            </div>
                            <div class="client-info">
                                <img src="{{ asset('assets/images/ASSNAT.png') }}" alt="ASSNAT" class="client-logo">
                                <div>
                                    <h5 class="mb-0">ASSEMBLEE NATIONALE</h5>
                                    <small class="text-primary">Plateforme SMS</small>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-side">
                    <h2 class="section-title mb-4">
                        <i class="bi bi-file-earmark-check text-primary me-2"></i>Preuves de performance
                    </h2>

                    <div class="accordion accordion-flush shadow-sm rounded" id="lettersAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#letter1">
                                    FOANI Services
                                </button>
                            </h2>
                            <div id="letter1" class="accordion-collapse collapse show" data-bs-parent="#lettersAccordion">
                                <div class="accordion-body text-center">
                                    <a href="{{ asset('assets/images/lettre-FOANI.jpg') }}" class="venobox" data-gall="letters">
                                        <img src="{{ asset('assets/images/lettre-FOANI.jpg') }}" alt="Lettre FOANI" class="img-fluid rounded border">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#letter2">
                                    ASSEMBLEE NATIONALE
                                </button>
                            </h2>
                            <div id="letter2" class="accordion-collapse collapse" data-bs-parent="#lettersAccordion">
                                <div class="accordion-body text-center">
                                    <a href="{{ asset('assets/images/lettre-ASSNAT.jpg') }}" class="venobox" data-gall="letters">
                                        <img src="{{ asset('assets/images/lettre-ASSNAT.jpg') }}" alt="Lettre ASSNAT" class="img-fluid rounded border">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#letter3">
                                    PION SUR RUE (PSR)
                                </button>
                            </h2>
                            <div id="letter3" class="accordion-collapse collapse" data-bs-parent="#lettersAccordion">
                                <div class="accordion-body text-center">
                                    <a href="{{ asset('assets/images/lettre-PSR.jpg') }}" class="venobox" data-gall="letters">
                                        <img src="{{ asset('assets/images/lettre-PSR.jpg') }}" alt="Lettre PSR" class="img-fluid rounded border">
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- end testimonial -->

<!-- confiance -->

<section class="info-service-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="img-container text-center mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/clientele.png') }}" class="img-fluid floating-img" alt="Commercial">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-content ps-lg-5">
                    <span class="badge bg-primary-soft text-primary mb-2">Besoin d’information</span>
                    <h2 class="fw-bold mb-4">Service Commercial</h2>
                    <p class="text-muted">Sans protocole, nous avons routé notre standard pour un accès direct aux conseillers clientèles. Le Service Commercial se tient à votre disposition pour répondre à vos besoins.</p>
                    <a href="{{ route('frontend.contact') }}" class="btn btn-primary rounded-pill px-4 mt-3 shadow-sm">Contactez nous</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tech-service-section py-5 position-relative overflow-hidden">
    <img src="{{ asset('assets/images/technique.png') }}" alt="Support" class="bg-html-layer">
    <div class="tech-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="d-none d-lg-block" style="height: 300px;"></div>
            </div>
            <div class="col-lg-6">
                <div class="service-content-card p-4 p-md-5">
                    <span class="badge bg-info text-white mb-2">Besoin d’assistance</span>
                    <h2 class="text-white fw-bold mb-4">Service Technique</h2>
                    <p class="text-white-50">Nous garantissons une assistance toutes azimuts. Notre support technique répond dans un délai bref à vos préoccupations et traite vos problèmes matériels en priorité.</p>
                    <a href="{{ route('frontend.contact') }}" class="btn btn-outline-info rounded-pill px-4 mt-3">Nous contacter</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="brands-area py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="fw-bold text-uppercase" style="letter-spacing: 2px;">Ils nous ont fait confiance</h3>
            <div class="header-line mx-auto bg-primary"></div>
        </div>

        <div class="logo-slider-container" id="logo-slider">
            <div class="logo-track" id="logo-track">
                <div class="logo-item"><img src="{{ asset('assets/images/1.png') }}" alt="Brand"></div>
                <div class="logo-item"><img src="{{ asset('assets/images/2.jpg') }}" alt="Brand"></div>
                <div class="logo-item"><img src="{{ asset('assets/images/3.jpg') }}" alt="Brand"></div>
                <div class="logo-item"><img src="{{ asset('assets/images/4.jpg') }}" alt="Brand"></div>
                <div class="logo-item"><img src="{{ asset('assets/images/5.jpg') }}" alt="Brand"></div>
                <div class="logo-item"><img src="{{ asset('assets/images/6.jpg') }}" alt="Brand"></div>
            </div>
        </div>
    </div>
</section>

<!-- end confiance -->

<!-- contact -->
<section class="contact-section py-5 position-relative">
    <img src="{{ asset('assets/img/background-contact.jpg') }}" alt="Contact Background" class="bg-contact-img">
    <div class="contact-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="contact-box shadow-lg rounded-4 overflow-hidden bg-white" data-aos="fade-up">
            <div class="row g-0">

                <div class="col-lg-5">
                    <div class="map-wrapper h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.393452093551!2d-3.985!3d5.35!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMjEnMDAuMCJOIDPCsDU5JzAwLjAiVw!5e0!3m2!1sfr!2sci!4v1700000000000"
                            width="100%" height="100%" style="border:0; min-height: 450px;"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-p p-4 p-md-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-dark">Nous Contacter</h3>
                            <p class="text-muted small">Demandez un devis gratuit ou des informations</p>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                        </div>
                        @endif

                        <form id="contact_form_classic" action="{{ route('contact.store') }}" method="POST" class="needs-validation">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom et Prénoms" class="form-control custom-input @error('nom') is-invalid @enderror" required>
                                    @error('nom') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control custom-input @error('email') is-invalid @enderror" required>
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="contact" value="{{ old('contact') }}" placeholder="Téléphone / WhatsApp" class="form-control custom-input @error('contact') is-invalid @enderror">
                                    @error('contact') <div class="invalid-feedback">{{ $message }}</div> @enderror {{-- Corrigé ici --}}
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="entreprise" value="{{ old('entreprise') }}" placeholder="Votre Entreprise" class="form-control custom-input @error('entreprise') is-invalid @enderror">
                                    @error('entreprise') <div class="invalid-feedback">{{ $message }}</div> @enderror {{-- Corrigé ici --}}
                                </div>

                                <div class="col-12">
                                    <textarea name="message" rows="4" placeholder="Comment pouvons-nous vous aider ?" class="form-control custom-input @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                    @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="captcha-box d-flex align-items-center gap-3 p-3 rounded-3 bg-light @error('heure') border border-danger @enderror">
                                        <label class="mb-0 text-dark small fw-bold">Sécurité : Entrez le nombre <span class="text-primary" id="captcha_number">--</span></label>
                                        <input type="hidden" name="captcha_expected" id="captcha_expected">
                                        <input type="text" name="heure" class="form-control text-center" style="width: 80px;" required>
                                    </div>
                                    @error('heure') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                                        Envoyer ma demande <i class="bi bi-send ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!--   end contact -->


<script>
    // captcha_number random

   
        let num = Math.floor(Math.random() * 90) + 10;
        let display = document.querySelector('#captcha_number');
        let input = document.querySelector('#captcha_expected');

        if (display && input) {
            display.textContent = num;
            input.value = num;
        }
    
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('logo-track');
        const logos = Array.from(track.children);

        // Cloner les logos pour créer l'effet infini
        logos.forEach(logo => {
            const clone = logo.cloneNode(true);
            track.appendChild(clone);
        });

        let scrollPos = 0;
        const speed = 0.5; // Ajustez la vitesse ici

        function animate() {
            scrollPos -= speed;
            // Si le premier jeu de logos est complètement sorti, on reset
            if (Math.abs(scrollPos) >= track.scrollWidth / 2) {
                scrollPos = 0;
            }
            track.style.transform = `translateX(${scrollPos}px)`;
            requestAnimationFrame(animate);
        }

        animate();
    });
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('testimonial-carousel');
        const cards = carousel.querySelectorAll('.testimonial-card');

        // 1. Création de la structure interne (le track)
        const track = document.createElement('div');
        track.className = 'testimonial-track';

        // On déplace les cartes existantes dans le track
        cards.forEach(card => track.appendChild(card));
        carousel.appendChild(track);

        // 2. Création des points de navigation (dots)
        const dotsContainer = document.createElement('div');
        dotsContainer.className = 'carousel-dots';
        carousel.parentNode.appendChild(dotsContainer);

        const dots = [];
        cards.forEach((_, i) => {
            const dot = document.createElement('button');
            dot.className = 'dot' + (i === 0 ? ' active' : '');
            dot.addEventListener('click', () => goToSlide(i));
            dotsContainer.appendChild(dot);
            dots.push(dot);
        });

        let currentIndex = 0;
        let slideInterval;

        // 3. Fonction pour changer de slide
        function goToSlide(index) {
            currentIndex = index;
            const offset = -currentIndex * 100;
            track.style.transform = `translateX(${offset}%)`;

            // Mise à jour des dots
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === currentIndex);
            });

            resetTimer(); // On réinitialise le timer quand on clique manuellement
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % cards.length;
            goToSlide(currentIndex);
        }

        // 4. Gestion du temps (Autoplay)
        function startTimer() {
            slideInterval = setInterval(nextSlide, 5000); // Change toutes les 5 secondes
        }

        function resetTimer() {
            clearInterval(slideInterval);
            startTimer();
        }

        // Arrêt si la souris survole le carrousel
        carousel.addEventListener('mouseenter', () => clearInterval(slideInterval));
        carousel.addEventListener('mouseleave', () => startTimer());

        // Lancement
        startTimer();
    });
</script>
@endsection