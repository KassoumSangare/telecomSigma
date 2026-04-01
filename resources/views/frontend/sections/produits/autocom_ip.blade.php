@extends('frontend.layout.base')

@section('title','autocom IP')

@section('content')

<style>
    /* ================= VARIABLES COULEURS LOGO ================= */
    :root {
        --primary-dark: #1c2f60;
        --primary-light: #365f92;
        --white: #fdfdfd;
        --gradient-primary: linear-gradient(135deg, #1c2f60 0%, #365f92 100%);
        --shadow-sm: 0 2px 10px rgba(28, 47, 96, 0.1);
        --shadow-md: 0 10px 30px rgba(28, 47, 96, 0.15);
        --shadow-lg: 0 20px 40px rgba(28, 47, 96, 0.2);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ================= HERO BREADCRUMB ================= */
    .hero-breadcrumb {
        position: relative;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background-attachment: fixed !important;
    }

    /* Overlay moderne avec dégradé */
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg,
                rgba(28, 47, 96, 0.92) 0%,
                rgba(54, 95, 146, 0.88) 100%);
        z-index: 1;
    }

    /* Animation subtle de l'overlay */
    .hero-overlay::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(253, 253, 253, 0.1),
                transparent);
        animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
        100% {
            left: 100%;
        }
    }

    /* Breadcrumb */
    .breadcrumb {
        background: transparent;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: "›";
        color: rgba(253, 253, 253, 0.5);
        font-size: 1.2rem;
    }

    .breadcrumb-item a {
        transition: color 0.3s ease;
    }

    .breadcrumb-item a:hover {
        color: var(--white) !important;
    }

    /* Titre principal */
    .hero-breadcrumb h1 {
        letter-spacing: 2px;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        animation: fadeInUp 0.8s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Ligne de titre */
    .title-line {
        width: 100px;
        height: 4px;
        background: var(--gradient-primary);
        border-radius: 2px;
        animation: expandLine 0.8s ease 0.3s both;
    }

    @keyframes expandLine {
        from {
            width: 0;
        }

        to {
            width: 100px;
        }
    }

    /* ================= SECTION CONTENU ================= */
    .about-page-content {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(to bottom,
                #f8f9fa 0%,
                var(--white) 50%,
                #f8f9fa 100%);
    }

    /* Overlay subtil pour le fond */
    .header-bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at top right,
                rgba(54, 95, 146, 0.03) 0%,
                transparent 50%);
        pointer-events: none;
        z-index: 1;
    }

    /* ================= IMAGE WRAPPER ================= */
    .img-wrapper {
        position: relative;
        overflow: hidden;
        border-radius: 20px !important;
        box-shadow: var(--shadow-lg) !important;
    }

    .img-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--gradient-primary);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .img-wrapper:hover::before {
        opacity: 0.1;
    }

    .img-wrapper img {
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        display: block;
    }

    .img-wrapper:hover img {
        transform: scale(1.08);
    }

    /* Bordure personnalisée */
    .border-primary {
        border-color: var(--primary-light) !important;
        border-width: 5px !important;
    }

    /* ================= CONTENU TEXTE ================= */
    .right-content-area h2 {
        font-size: 2.5rem;
        color: var(--primary-dark);
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
    }

    .right-content-area h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 80px;
        height: 3px;
        background: var(--gradient-primary);
        border-radius: 2px;
    }

    .text-primary {
        color: var(--primary-light) !important;
    }

    .text-dark {
        color: var(--primary-dark) !important;
    }

    /* Texte de description */
    .description-text p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #4a5568;
        margin-bottom: 20px;
    }

    .description-text .lead {
        font-size: 1.2rem;
        color: var(--primary-dark);
        font-weight: 500;
    }

    .description-text strong {
        color: var(--primary-dark);
        font-weight: 600;
    }

    /* Icônes Bootstrap */
    .bi {
        transition: transform 0.3s ease;
    }

    p:hover .bi {
        transform: scale(1.2);
    }

    /* ================= TABLEAU COMPARATIF ================= */
    .table-responsive {
        box-shadow: var(--shadow-md) !important;
        border-radius: 12px !important;
        overflow: hidden;
        border: 1px solid rgba(28, 47, 96, 0.1) !important;
    }

    .table {
        margin-bottom: 0 !important;
    }

    /* En-tête du tableau */
    .table thead {
        background: var(--gradient-primary) !important;
    }

    .table thead th {
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        padding: 18px 15px;
        border: none;
        vertical-align: middle;
    }

    /* Corps du tableau */
    .table tbody tr {
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background-color: rgba(54, 95, 146, 0.05) !important;
        transform: scale(1.01);
    }

    .table tbody td {
        padding: 16px 15px;
        font-size: 0.95rem;
        color: #4a5568;
        border-bottom: 1px solid rgba(28, 47, 96, 0.08);
        vertical-align: middle;
    }

    /* Cellules en surbrillance */
    .table .bg-light {
        background-color: rgba(54, 95, 146, 0.1) !important;
    }

    .table .text-primary {
        color: var(--primary-light) !important;
        font-weight: 700 !important;
    }

    .table .fw-bold {
        font-weight: 600 !important;
        color: var(--primary-dark);
    }

    /* Dernière ligne sans bordure */
    .table tbody tr:last-child td {
        border-bottom: none;
    }

    /* ================= ENCADRÉ INFO ================= */
    .bg-light {
        background: linear-gradient(135deg,
                rgba(54, 95, 146, 0.05) 0%,
                rgba(28, 47, 96, 0.03) 100%) !important;
        border-left: 4px solid var(--primary-light) !important;
    }

    .bg-light:hover {
        background: linear-gradient(135deg,
                rgba(54, 95, 146, 0.08) 0%,
                rgba(28, 47, 96, 0.05) 100%) !important;
    }

    .small {
        font-size: 0.95rem;
    }

    .italic {
        font-style: italic;
    }

    .text-muted {
        color: #6b7280 !important;
    }

    /* Lien dans l'encadré */
    .bg-light a {
        transition: all 0.3s ease;
        position: relative;
    }

    .bg-light a::after {
        content: '→';
        margin-left: 5px;
        opacity: 0;
        transform: translateX(-5px);
        transition: all 0.3s ease;
        display: inline-block;
    }

    .bg-light a:hover::after {
        opacity: 1;
        transform: translateX(0);
    }

    .bg-light a:hover {
        color: var(--primary-dark) !important;
    }

    /* ================= TITRES DE SECTIONS ================= */
    h5.fw-bold {
        color: var(--primary-dark);
        font-size: 1.3rem;
        position: relative;
        padding-left: 35px;
    }

    h5.fw-bold .bi {
        position: absolute;
        left: 0;
        font-size: 1.5rem;
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 991px) {
        .hero-breadcrumb {
            min-height: 350px;
        }

        .hero-breadcrumb h1 {
            font-size: 2.5rem;
        }

        .about-page-content {
            padding: 80px 0;
        }

        .right-content-area h2 {
            font-size: 2rem;
            text-align: center;
        }

        .right-content-area h2::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .left-content-area {
            margin-bottom: 40px;
        }

        .img-wrapper {
            margin: 0 auto;
            max-width: 500px;
        }

        .table-responsive {
            font-size: 0.85rem;
        }

        .table thead th,
        .table tbody td {
            padding: 12px 10px;
        }
    }

    @media (max-width: 768px) {
        .hero-breadcrumb {
            min-height: 300px;
        }

        .hero-breadcrumb h1 {
            font-size: 2rem;
        }

        .title-line {
            width: 80px;
        }

        .about-page-content {
            padding: 60px 0;
        }

        .right-content-area h2 {
            font-size: 1.75rem;
        }

        .description-text p,
        .description-text .lead {
            font-size: 1rem;
        }

        h5.fw-bold {
            font-size: 1.1rem;
            padding-left: 30px;
        }

        h5.fw-bold .bi {
            font-size: 1.3rem;
        }

        .table {
            font-size: 0.8rem;
        }

        .table thead th {
            font-size: 0.75rem;
            padding: 10px 8px;
        }

        .table tbody td {
            padding: 10px 8px;
        }

        /* Tableau défilable horizontal sur mobile */
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table {
            min-width: 600px;
        }
    }

    @media (max-width: 576px) {
        .hero-breadcrumb h1 {
            font-size: 1.75rem;
            letter-spacing: 1px;
        }

        .right-content-area h2 {
            font-size: 1.5rem;
        }

        .bg-light {
            padding: 15px !important;
        }

        .table thead th,
        .table tbody td {
            padding: 8px 6px;
            font-size: 0.75rem;
        }
    }

    /* ================= ANIMATIONS D'ENTRÉE ================= */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .left-content-area,
    .right-content-area {
        animation: fadeIn 0.8s ease;
    }

    /* Animation au scroll (optionnel - nécessite JavaScript) */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* ================= BOUTONS GLOBAUX ================= */
    .btn-primary {
        background: var(--gradient-primary) !important;
        border: none !important;
        color: var(--white) !important;
        padding: 12px 30px;
        font-weight: 600;
        transition: var(--transition) !important;
        box-shadow: var(--shadow-sm);
    }

    .btn-primary:hover {
        transform: translateY(-2px) !important;
        box-shadow: var(--shadow-md) !important;
    }

    .text-decoration-none {
        text-decoration: none !important;
    }

    .text-decoration-none:hover {
        text-decoration: underline !important;
    }

    /* ================= EFFETS VISUELS SUPPLÉMENTAIRES ================= */

    /* Effet parallaxe sur le hero */
    @media (min-width: 992px) {
        .hero-breadcrumb {
            background-attachment: fixed;
        }
    }

    /* Effet de focus sur les liens */
    a:focus-visible {
        outline: 2px solid var(--primary-light);
        outline-offset: 3px;
        border-radius: 4px;
    }

    /* Amélioration de l'accessibilité */
    .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }

    /* Effet de survol sur les cellules du tableau */
    .table tbody td:hover {
        background-color: rgba(54, 95, 146, 0.08) !important;
    }

    /* Animation de pulsation pour l'icône info */
    .bi-info-circle {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.6;
        }
    }
</style>
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/autocom_ip.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Solutions</li>
                    </ol> -->
                </nav>

                <h1 class="display-4 fw-bold text-white mb-0">AUTOCOM IP</h1>

                <div class="title-line mx-auto bg-primary mt-3"></div>
            </div>
        </div>
    </div>
</section>
<section class="about-page-content py-5 position-relative">
    <div class="header-bg-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center">

            <div class="col-lg-6">
                <div class="left-content-area pe-lg-4">
                    <div class="img-wrapper shadow-lg rounded-4 overflow-hidden border-start border-primary border-5">
                        <img src="{{ asset('assets/images/autocomnew_ip.jpg') }}" alt="Autocommutateurs IP TicAfrique" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area mt-4 mt-lg-0">
                    <h2 class="fw-bold mb-4 text-dark">Solutions <span class="text-primary">Autocom IP</span> Modulaires</h2>

                    <div class="description-text mb-4">
                        <p class="lead fw-normal">Les Autocommutateurs IP de TICAFRIQUE offrent des fonctionnalités modernes et évolutives pour les petites, moyennes et grandes entreprises.</p>

                        <p><i class="bi bi-cpu text-primary me-2"></i><strong>Système hybride :</strong> Nos IP-PBX se connectent nativement à l’analogique, au RNIS, au GSM/UMTS et aux connexions VoIP.</p>

                        <p><i class="bi bi-phone-flip text-primary me-2"></i><strong>Mobilité sans frais :</strong> Vos mobiles deviennent des postes internes. Restez joignable partout sans coût supplémentaire, même hors de l’entreprise.</p>
                    </div>



                    <h5 class="fw-bold mb-3 mt-4"><i class="bi bi-layers-half text-primary me-2"></i>Tableau Comparatif des Modèles</h5>

                    <div class="table-responsive shadow-sm rounded-3 border">
                        <table class="table table-hover align-middle mb-0 text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th class="text-start ps-3">Spécifications</th>
                                    <th>TPE</th>
                                    <th>Petite</th>
                                    <th>Moyenne</th>
                                    <th>Grande</th>
                                    <th>Grande +</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr>
                                    <td class="text-start ps-3 fw-bold">Utilisateurs</td>
                                    <td>12</td>
                                    <td class="bg-light text-primary fw-bold">20</td>
                                    <td>50</td>
                                    <td>100-200</td>
                                    <td>300-500</td>
                                </tr>
                                <tr>
                                    <td class="text-start ps-3 fw-bold">Appels simultanés</td>
                                    <td>08</td>
                                    <td>10</td>
                                    <td class="bg-light text-primary fw-bold">25</td>
                                    <td>30-60</td>
                                    <td>60-120</td>
                                </tr>
                                <tr>
                                    <td class="text-start ps-3 fw-bold">Ports FXS/FXO</td>
                                    <td>04</td>
                                    <td>04</td>
                                    <td>08</td>
                                    <td>16</td>
                                    <td class="bg-light text-primary fw-bold">24</td>
                                </tr>
                                <tr>
                                    <td class="text-start ps-3 fw-bold">Canaux GSM/3G</td>
                                    <td>02</td>
                                    <td>01</td>
                                    <td>04</td>
                                    <td>06</td>
                                    <td>06</td>
                                </tr>
                                <tr>
                                    <td class="text-start ps-3 fw-bold">Ports E1/T1/PRI</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>02</td>
                                    <td>03</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded-3 small text-muted italic">
                        <i class="bi bi-info-circle me-1"></i> TICAFRIQUE propose de nombreux autres modèles.
                        <a href="{{ route('frontend.contact') }}" class="fw-bold text-primary text-decoration-none">Contactez-nous pour une étude personnalisée.</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection