@extends('frontend.layout.base')

@section('title','Acceuil')
@section('content')

<style>
    /* ================= VARIABLES COULEURS LOGO ================= */
    :root {
        --primary-dark: #1c2f60;
        /* Bleu foncé principal */
        --primary-light: #365f92;
        /* Bleu clair secondaire */
        --white: #fdfdfd;
        /* Blanc cassé */
        --gradient-primary: linear-gradient(135deg, #1c2f60 0%, #365f92 100%);
        --gradient-overlay: linear-gradient(135deg, rgba(28, 47, 96, 0.9) 0%, rgba(54, 95, 146, 0.85) 100%);
        --shadow-sm: 0 2px 10px rgba(28, 47, 96, 0.1);
        --shadow-md: 0 10px 30px rgba(28, 47, 96, 0.15);
        --shadow-lg: 0 20px 40px rgba(28, 47, 96, 0.2);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ================= SECTION SERVICES (SLIDE) ================= */
    .services-refonte {
        position: relative;
        padding: 120px 0;
        overflow: hidden;
        min-height: 700px;
        background-color: var(--primary-dark);
    }

    /* Image de fond */
    .html-bg-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
        opacity: 0.15;
    }

    /* Overlay moderne avec dégradé subtil */
    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg,
                rgba(28, 47, 96, 0.95) 0%,
                rgba(54, 95, 146, 0.9) 100%);
        z-index: 1;
    }

    .services-refonte .container {
        position: relative;
        z-index: 2;
    }

    /* Titre de section amélioré */
    .section-title {
        position: relative;
        z-index: 2;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        letter-spacing: -0.5px;
        margin-bottom: 15px;
    }

    .header-line {
        width: 80px;
        height: 4px;
        background: var(--primary-light);
        border-radius: 2px;
        position: relative;
        overflow: hidden;
    }

    .header-line::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--white);
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        100% {
            left: 100%;
        }
    }

    /* Cards redesign complet */
    .service-card {
        background: rgba(253, 253, 253, 0.08);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(253, 253, 253, 0.15);
        border-radius: 20px;
        height: 100%;
        transition: var(--transition);
        overflow: hidden;
        position: relative;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--gradient-primary);
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-card:hover {
        transform: translateY(-12px);
        background: rgba(253, 253, 253, 0.12);
        border-color: var(--primary-light);
        box-shadow: var(--shadow-lg);
    }

    /* Image avec overlay au survol */
    .card-thumb {
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .card-thumb::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--gradient-overlay);
        opacity: 0.3;
        transition: opacity 0.3s ease;
    }

    .service-card:hover .card-thumb::after {
        opacity: 0.5;
    }

    .card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .service-card:hover .card-thumb img {
        transform: scale(1.15);
    }

    /* Contenu de la card */
    .card-body {
        padding: 30px;
        color: var(--white);
    }

    .card-body h4 {
        margin-bottom: 15px;
    }

    .card-body h4 a {
        color: var(--white);
        text-decoration: none;
        font-size: 1.3rem;
        font-weight: 700;
        display: block;
        transition: color 0.3s ease;
        position: relative;
    }

    .card-body h4 a::after {
        content: '→';
        position: absolute;
        right: 0;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
    }

    .service-card:hover .card-body h4 a::after {
        opacity: 1;
        transform: translateX(0);
    }

    .service-card:hover .card-body h4 a {
        color: var(--primary-light);
    }

    .card-body p {
        font-size: 0.95rem;
        line-height: 1.7;
        opacity: 0.9;
        margin: 0;
    }

    /* ================= CONNEXION ASSURÉE ================= */
    .split-bg-section {
        position: relative;
        width: 100%;
        min-height: 85vh;
        display: flex;
        align-items: center;
        overflow: hidden;
        padding: 100px 0;
        background-color: var(--primary-dark);
    }

    .html-background-img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
        opacity: 0.2;
    }

    .split-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right,
                rgba(28, 47, 96, 0.3) 0%,
                rgba(28, 47, 96, 0.95) 100%);
        z-index: 1;
    }

    /* Card avec effet glassmorphism amélioré */
    .content-card-glass {
        background: rgba(253, 253, 253, 0.05);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        padding: 60px;
        border-radius: 30px;
        border: 1px solid rgba(253, 253, 253, 0.15);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.4);
        position: relative;
        overflow: hidden;
    }

    .content-card-glass::before {
        content: '';
        position: absolute;
        top: -2px;
        left: -2px;
        right: -2px;
        bottom: -2px;
        background: var(--gradient-primary);
        border-radius: 30px;
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .content-card-glass:hover::before {
        opacity: 0.1;
    }

    .content-text p {
        font-size: 1.1rem;
        line-height: 1.8;
    }

    /* Badge modernisé */
    .badge {
        font-size: 0.85rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        padding: 10px 20px;
    }

    .bg-info {
        background: var(--primary-light) !important;
    }

    /* Icône flottante améliorée */
    .floating-icon-box {
        animation: float 6s ease-in-out infinite;
        background: rgba(54, 95, 146, 0.15);
        padding: 60px;
        border-radius: 50%;
        border: 3px solid rgba(54, 95, 146, 0.3);
        box-shadow: 0 20px 60px rgba(54, 95, 146, 0.2);
        position: relative;
    }

    .floating-icon-box::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        border: 2px dashed rgba(54, 95, 146, 0.2);
        border-radius: 50%;
        animation: rotate 20s linear infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) scale(1);
        }

        50% {
            transform: translateY(-25px) scale(1.05);
        }
    }

    @keyframes rotate {
        100% {
            transform: rotate(360deg);
        }
    }

    .text-info {
        color: var(--primary-light) !important;
    }

    /* ================= NOS ENGAGEMENTS ================= */
    .corporate-identity-section {
        position: relative;
        padding: 120px 0;
        overflow: hidden;
        background-color: var(--primary-dark);
    }

    .bg-html-asset {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
        opacity: 0.1;
    }

    .identity-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(180deg,
                rgba(28, 47, 96, 0.95) 0%,
                rgba(28, 47, 96, 0.85) 100%);
        z-index: 1;
    }

    /* Cards avec design moderne */
    .identity-card {
        background: rgba(253, 253, 253, 0.06);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(253, 253, 253, 0.12);
        padding: 50px 35px;
        border-radius: 25px;
        transition: var(--transition);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .identity-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--gradient-primary);
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .identity-card:hover::before {
        opacity: 0.1;
    }

    .identity-card:hover {
        transform: translateY(-15px);
        background: rgba(253, 253, 253, 0.1);
        border-color: var(--primary-light);
        box-shadow: var(--shadow-lg);
    }

    .identity-card.active {
        border-color: rgba(54, 95, 146, 0.5);
        box-shadow: 0 15px 40px rgba(54, 95, 146, 0.3);
        background: rgba(253, 253, 253, 0.08);
    }

    /* Icônes redesign */
    .icon-shape {
        width: 85px;
        height: 85px;
        background: var(--gradient-primary);
        color: var(--white);
        font-size: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        margin: 0 auto;
        box-shadow: 0 15px 35px rgba(54, 95, 146, 0.4);
        transition: var(--transition);
        position: relative;
    }

    .icon-shape::before {
        content: '';
        position: absolute;
        inset: -3px;
        background: var(--gradient-primary);
        border-radius: 20px;
        z-index: -1;
        opacity: 0.3;
        filter: blur(10px);
    }

    .identity-card:hover .icon-shape {
        transform: rotateY(360deg) scale(1.1);
    }

    .identity-card h4 {
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-size: 1.2rem;
    }

    /* ================= TESTIMONIAL ================= */
    .trust-area {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 100px 0;
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-dark);
        position: relative;
        padding-bottom: 15px;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 3px;
        background: var(--gradient-primary);
        border-radius: 2px;
    }

    /* Cards témoignages modernisées */
    .testimonial-card {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: var(--shadow-sm);
        margin-bottom: 20px;
        transition: var(--transition);
        border: 1px solid transparent;
    }

    .testimonial-card:hover {
        box-shadow: var(--shadow-md);
        border-color: var(--primary-light);
        transform: translateY(-5px);
    }

    .quote-content {
        position: relative;
        margin-bottom: 25px;
        font-style: italic;
        color: #555;
        font-size: 1.05rem;
        padding-left: 30px;
    }

    .quote-content::before {
        content: '"';
        font-family: Georgia, serif;
        font-size: 4rem;
        color: var(--primary-light);
        opacity: 0.2;
        position: absolute;
        top: -20px;
        left: -10px;
        line-height: 1;
    }

    .client-info {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .client-logo {
        width: 70px;
        height: 70px;
        object-fit: contain;
        border: 2px solid var(--primary-light);
        padding: 8px;
        border-radius: 50%;
        background: white;
    }

    .text-primary {
        color: var(--primary-light) !important;
    }

    /* Accordéon modernisé */
    .accordion-item {
        border: none;
        margin-bottom: 12px;
        border-radius: 12px !important;
        overflow: hidden;
        box-shadow: var(--shadow-sm);
    }

    .accordion-button {
        background-color: white;
        color: var(--primary-dark);
        transition: var(--transition);
        padding: 18px 24px;
        font-weight: 600;
    }

    .accordion-button:not(.collapsed) {
        background: var(--gradient-primary);
        color: white;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }

    .accordion-button:focus {
        box-shadow: 0 0 0 3px rgba(54, 95, 146, 0.2);
        border-color: var(--primary-light);
    }

    .accordion-body {
        padding: 30px;
    }

    .accordion-body img {
        max-height: 450px;
        cursor: pointer;
        transition: transform 0.4s ease;
        border-radius: 12px;
        box-shadow: var(--shadow-md);
    }

    .accordion-body img:hover {
        transform: scale(1.03);
    }

    /* ================= DOTS CAROUSEL ================= */
    .carousel-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 25px;
    }

    .dot {
        width: 12px;
        height: 12px;
        background: #d1d5db;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        transition: all 0.3s ease;
        padding: 0;
    }

    .dot:hover {
        background: var(--primary-light);
        transform: scale(1.2);
    }

    .dot.active {
        background: var(--gradient-primary);
        width: 32px;
        border-radius: 6px;
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 991px) {

        .services-refonte,
        .corporate-identity-section,
        .split-bg-section {
            padding: 80px 0;
        }

        .card-thumb {
            height: 180px;
        }

        .section-title h2 {
            font-size: 2rem;
        }

        .content-card-glass {
            padding: 40px 30px;
            background: rgba(253, 253, 253, 0.08);
            backdrop-filter: blur(12px);
        }

        .split-overlay {
            background: rgba(28, 47, 96, 0.9);
        }

        .identity-card {
            padding: 40px 25px;
            margin-bottom: 20px;
        }

        .floating-icon-box {
            padding: 40px;
            margin-bottom: 40px;
        }
    }

    @media (max-width: 768px) {
        .services-refonte {
            padding: 60px 0;
        }

        .card-thumb {
            height: 160px;
        }

        .section-title h2 {
            font-size: 1.75rem;
        }

        .card-body {
            padding: 25px;
        }

        .card-body h4 a {
            font-size: 1.15rem;
        }

        .content-card-glass {
            padding: 30px 20px;
        }

        .icon-shape {
            width: 70px;
            height: 70px;
            font-size: 30px;
        }
    }

    /* ================= BOUTONS GLOBAUX ================= */
    .btn-primary {
        background: var(--gradient-primary) !important;
        border: none !important;
        transition: var(--transition) !important;
    }

    .btn-primary:hover {
        transform: translateY(-2px) !important;
        box-shadow: 0 10px 25px rgba(54, 95, 146, 0.4) !important;
    }

    .btn-outline-light {
        border-color: var(--white) !important;
        color: var(--white) !important;
    }

    .btn-outline-light:hover {
        background: var(--white) !important;
        color: var(--primary-dark) !important;
    }

    .btn-info {
        background: var(--primary-light) !important;
        border: none !important;
    }

    .btn-outline-info {
        border-color: var(--primary-light) !important;
        color: var(--primary-light) !important;
    }

    .btn-outline-info:hover {
        background: var(--primary-light) !important;
        color: white !important;
    }
</style>
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
                        <h4><a href="{{ route('telephonie_entreprise') }}">Téléphonie d’entreprise</a></h4>
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
                        <h4><a href="{{ route('autocom_ip') }}">Autocoms IP</a></h4>
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
                        <h4><a href="{{ route('passerelle') }}">Passerelle GSM</a></h4>
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
                        <h4><a href="{{ route('antenne') }}">Antennes</a></h4>
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
                        <h4><a href="{{ route('connectivite') }}">Connectivité</a></h4>
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
                        <h4><a href="{{ route('conseil_personnalise') }}">Conseils</a></h4>
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
                        <h4><a href="{{ route('installation_maintenance') }}">Installation & Maintenance</a></h4>
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