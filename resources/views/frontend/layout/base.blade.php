<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- ================= META ================= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'TicAfrique | Solutions Télécom & IT')</title>

    <meta name="description"
        content="TicAfrique propose des solutions de téléphonie d’entreprise, connectivité et interconnexion de sites en Côte d’Ivoire.">
    <meta name="keywords"
        content="Télécom, Téléphonie IP, Connectivité, Réseau, Entreprise, Côte d’Ivoire">
    <meta name="author" content="TicAfrique">

    <!-- ================= FAVICON ================= -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

    <!-- ================= CSS ================= -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Page specific CSS -->

    @stack('styles')
</head>

<body>
    <style>
        /* ===============================================
   DESIGN SYSTEM - TIC@FRIQUE
   Version Optimisée 2026
   =============================================== */

        /* ================= VARIABLES COULEURS ================= */
        :root {
            /* Palette principale (adoucie) */
            --primary-dark: #1a2f45;
            /* Bleu marine professionnel */
            --primary-medium: #2d5a7b;
            /* Bleu intermédiaire */
            --primary-light: #4a7ba7;
            /* Bleu clair */
            --accent-blue: #0097d6;
            /* Bleu accent (moins vif) */
            --accent-cyan: #00b8d4;
            /* Cyan moderne */

            /* Couleurs neutres */
            --white: #ffffff;
            --off-white: #f8fafc;
            --light-gray: #e2e8f0;
            --gray: #94a3b8;
            --dark-gray: #475569;
            --text-dark: #1e293b;

            /* Dégradés */
            --gradient-primary: linear-gradient(135deg, #0097d6 0%, #2d5a7b 100%);
            --gradient-subtle: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            --gradient-dark: linear-gradient(135deg, #1a2f45 0%, #2d5a7b 100%);

            /* Ombres */
            --shadow-sm: 0 1px 3px rgba(26, 47, 69, 0.08);
            --shadow-md: 0 4px 12px rgba(26, 47, 69, 0.12);
            --shadow-lg: 0 10px 30px rgba(26, 47, 69, 0.15);
            --shadow-xl: 0 20px 50px rgba(26, 47, 69, 0.2);

            /* Transitions */
            --transition-fast: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-base: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);

            /* Espacements */
            --spacing-xs: 0.25rem;
            --spacing-sm: 0.5rem;
            --spacing-md: 1rem;
            --spacing-lg: 1.5rem;
            --spacing-xl: 2rem;
            --spacing-2xl: 3rem;

            /* Border radius */
            --radius-sm: 6px;
            --radius-md: 10px;
            --radius-lg: 15px;
            --radius-xl: 20px;
            --radius-full: 50px;
        }

        /* ================= RESET & BASE ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        body {
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            background-color: var(--white);
        }

        /* ================= HEADER ================= */

        /* Topbar supérieure */
        .topbar {
            background: var(--gradient-dark);
            color: var(--white);
            font-size: 0.875rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .topbar::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            100% {
                left: 100%;
            }
        }

        .topbar a {
            transition: var(--transition-fast);
        }

        .topbar a:hover {
            color: var(--accent-cyan) !important;
        }

        /* Logo dans topbar */
        .topbar .navbar-brand img {
            transition: var(--transition-base);
            filter: drop-shadow(0 2px 8px rgba(0, 0, 0, 0.2));
        }

        .topbar .navbar-brand:hover img {
            transform: scale(1.05);
        }

        /* Icônes dans topbar */
        .topbar i {
            transition: var(--transition-base);
        }

        .topbar .d-flex:hover i {
            transform: scale(1.15);
        }

        /* Navbar principale */
        .navbar {
            padding: 0.75rem 0;
            transition: var(--transition-base);
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.98) !important;
        }

        .navbar.scrolled {
            box-shadow: var(--shadow-md);
        }

        .navbar-brand img {
            transition: var(--transition-base);
            filter: drop-shadow(var(--shadow-sm));
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        /* Navigation links */
        .navbar-nav {
            gap: 0.25rem;
        }

        .navbar-light .navbar-nav .nav-link {
            color: var(--primary-dark);
            padding: 1rem 1.25rem;
            font-weight: 600;
            font-size: 0.95rem;
            letter-spacing: 0.01em;
            position: relative;
            transition: var(--transition-base);
        }

        /* Effet de soulignement animé */
        .navbar-light .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0.5rem;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 80%;
            height: 2px;
            background: var(--gradient-primary);
            transition: transform 0.3s ease;
        }

        .navbar-light .navbar-nav .nav-link:hover::before,
        .navbar-light .navbar-nav .nav-link.active::before {
            transform: translateX(-50%) scaleX(1);
        }

        .navbar-light .navbar-nav .nav-link:hover,
        .navbar-light .navbar-nav .nav-link.active {
            color: var(--accent-blue);
        }

        /* Dropdown menu */
        .dropdown-menu {
            border: none;
            border-radius: var(--radius-lg);
            padding: 0.75rem;
            box-shadow: var(--shadow-lg);
            margin-top: 0.5rem;
            background: var(--white);
            min-width: 220px;
            animation: fadeInDown 0.3s ease;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            border-radius: var(--radius-md);
            padding: 0.75rem 1.25rem;
            font-weight: 500;
            color: var(--text-dark);
            transition: var(--transition-fast);
            position: relative;
            overflow: hidden;
        }

        .dropdown-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 3px;
            height: 100%;
            background: var(--gradient-primary);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .dropdown-item:hover::before {
            transform: scaleY(1);
        }

        .dropdown-item:hover {
            background: linear-gradient(90deg, rgba(0, 151, 214, 0.08) 0%, transparent 100%);
            color: var(--accent-blue);
            padding-left: 1.5rem;
        }

        /* Bouton CTA principal */
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            color: var(--white);
            font-weight: 600;
            padding: 0.75rem 1.75rem;
            border-radius: var(--radius-full);
            box-shadow: var(--shadow-sm);
            transition: var(--transition-base);
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.5s ease, height 0.5s ease;
        }

        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }

        .btn-primary:active {
            transform: translateY(-1px);
        }

        /* Navbar toggler (mobile) */
        .navbar-toggler {
            border: 2px solid var(--primary-dark);
            padding: 0.5rem 0.75rem;
            border-radius: var(--radius-md);
            transition: var(--transition-base);
        }

        .navbar-toggler:hover {
            background: var(--primary-dark);
        }

        .navbar-toggler:hover .navbar-toggler-icon {
            filter: brightness(0) invert(1);
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 3px rgba(0, 151, 214, 0.2);
        }

        /* ================= FOOTER ================= */

        .main-footer {
            background: var(--gradient-dark);
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .main-footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(0, 151, 214, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(45, 90, 123, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .main-footer .container {
            position: relative;
            z-index: 1;
        }

        /* Logo footer */
        .footer-logo {
            transition: var(--transition-base);
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.2));
        }

        .footer-logo:hover {
            transform: scale(1.05);
        }

        /* Titres de colonnes */
        .footer-title {
            font-size: 1.125rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
            color: var(--white);
        }

        .footer-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--gradient-primary);
            border-radius: 2px;
        }

        /* Liens footer */
        .footer-links li {
            margin-bottom: 0.75rem;
            transition: var(--transition-base);
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition-base);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a::before {
            content: '→';
            opacity: 0;
            transform: translateX(-10px);
            transition: var(--transition-base);
        }

        .footer-links li:hover a::before {
            opacity: 1;
            transform: translateX(0);
        }

        .footer-links a:hover {
            color: var(--accent-cyan);
            padding-left: 0.5rem;
        }

        /* Contact footer */
        .footer-contact li {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            margin-bottom: 1rem;
            transition: var(--transition-base);
        }

        .footer-contact i {
            margin-top: 0.25rem;
            transition: var(--transition-base);
        }

        .footer-contact li:hover {
            transform: translateX(5px);
        }

        .footer-contact li:hover i {
            color: var(--accent-cyan);
            transform: scale(1.2);
        }

        /* Boutons réseaux sociaux */
        .footer-socials {
            display: flex;
            gap: 0.75rem;
            justify-content: center;
        }

        .footer-socials a {
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition-base);
            position: relative;
            overflow: hidden;
        }

        .footer-socials a::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: var(--gradient-primary);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: var(--transition-base);
            z-index: -1;
        }

        .footer-socials a:hover::before {
            width: 100%;
            height: 100%;
        }

        .footer-socials a:hover {
            border-color: var(--accent-cyan);
            color: var(--white);
            transform: translateY(-3px);
        }

        /* Copyright bar */
        .main-footer hr {
            border-color: rgba(255, 255, 255, 0.1);
            margin: 2rem 0;
        }

        /* ================= SCROLL TO TOP ================= */

        #scrollTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--gradient-primary);
            color: var(--white);
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            z-index: 1000;
            transition: var(--transition-base);
            font-size: 1.5rem;
        }

        #scrollTop::before {
            content: '';
            position: absolute;
            inset: -3px;
            background: var(--gradient-primary);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.3;
            filter: blur(8px);
            transition: var(--transition-base);
        }

        #scrollTop:hover::before {
            opacity: 0.6;
            filter: blur(12px);
        }

        #scrollTop:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
        }

        #scrollTop:active {
            transform: translateY(-2px);
        }

        #scrollTop.active {
            display: flex;
            animation: fadeInUp 0.4s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ================= UTILITIES ================= */

        /* Classes utilitaires de couleurs */
        .text-info {
            color: var(--accent-cyan) !important;
        }

        .text-primary {
            color: var(--accent-blue) !important;
        }

        .bg-primary {
            background: var(--gradient-primary) !important;
        }

        /* Effet hover subtle */
        .hover-info:hover {
            color: var(--accent-cyan) !important;
        }

        /* ================= RESPONSIVE DESIGN ================= */

        /* Desktop Large (1400px+) */
        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }

            .navbar-nav {
                gap: 0.5rem;
            }

            .navbar-light .navbar-nav .nav-link {
                padding: 1rem 1.5rem;
            }
        }

        /* Laptop (992px - 1399px) */
        @media (max-width: 1399px) {
            .navbar-light .navbar-nav .nav-link {
                padding: 1rem 1rem;
                font-size: 0.9rem;
            }
        }

        /* Tablette (768px - 991px) */
        @media (max-width: 991px) {

            /* Header */
            .topbar {
                display: none !important;
            }

            .navbar {
                padding: 1rem 0;
            }

            .navbar-collapse {
                margin-top: 1rem;
                padding: 1rem;
                background: var(--off-white);
                border-radius: var(--radius-lg);
                box-shadow: var(--shadow-md);
            }

            .navbar-nav {
                gap: 0;
            }

            .navbar-light .navbar-nav .nav-link {
                padding: 0.875rem 1rem;
                border-radius: var(--radius-md);
            }

            .navbar-light .navbar-nav .nav-link::before {
                display: none;
            }

            .navbar-light .navbar-nav .nav-link:hover,
            .navbar-light .navbar-nav .nav-link.active {
                background: rgba(0, 151, 214, 0.1);
            }

            .dropdown-menu {
                border: none;
                box-shadow: none;
                background: transparent;
                padding-left: 1rem;
            }

            .dropdown-item {
                padding: 0.625rem 1rem;
                font-size: 0.9rem;
            }

            .btn-primary {
                width: 100%;
                margin-top: 0.5rem;
            }

            /* Footer */
            .footer-col {
                text-align: center;
                margin-bottom: 2rem;
            }

            .footer-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .footer-links a::before {
                display: none;
            }

            .footer-contact {
                text-align: left;
                display: inline-block;
            }
        }

        /* Mobile (576px - 767px) */
        @media (max-width: 767px) {
            .navbar-brand img {
                height: 35px;
            }

            .btn-primary {
                padding: 0.625rem 1.5rem;
                font-size: 0.9rem;
            }

            .footer-title {
                font-size: 1rem;
            }

            .footer-links,
            .footer-contact {
                font-size: 0.875rem;
            }

            .footer-socials a {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }

            #scrollTop {
                width: 45px;
                height: 45px;
                bottom: 20px;
                right: 20px;
                font-size: 1.25rem;
            }
        }

        /* Mobile Small (< 576px) */
        @media (max-width: 575px) {
            .navbar {
                padding: 0.75rem 0;
            }

            .navbar-brand img {
                height: 30px;
            }

            .navbar-collapse {
                padding: 0.75rem;
            }

            .navbar-light .navbar-nav .nav-link {
                padding: 0.75rem 0.875rem;
                font-size: 0.875rem;
            }

            .btn-primary {
                padding: 0.5rem 1.25rem;
                font-size: 0.875rem;
            }

            .footer-col {
                margin-bottom: 1.5rem;
            }

            .footer-logo {
                max-height: 50px !important;
            }

            .footer-title {
                font-size: 0.95rem;
                margin-bottom: 1rem;
            }

            .main-footer .small {
                font-size: 0.8rem;
            }

            #scrollTop {
                width: 40px;
                height: 40px;
                bottom: 15px;
                right: 15px;
                font-size: 1.125rem;
            }
        }

        /* ================= ANIMATIONS PERFORMANCE ================= */

        /* Optimisation GPU */
        @media (prefers-reduced-motion: no-preference) {

            .navbar,
            .btn-primary,
            .footer-links a,
            #scrollTop {
                will-change: transform;
            }
        }

        /* Réduire les animations si demandé */
        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }

        /* ================= ACCESSIBILITÉ ================= */

        /* Focus visible pour navigation clavier */
        *:focus-visible {
            outline: 3px solid var(--accent-blue);
            outline-offset: 3px;
            border-radius: var(--radius-sm);
        }

        /* Skip to main content (accessibilité) */
        .skip-to-main {
            position: absolute;
            top: -40px;
            left: 0;
            background: var(--accent-blue);
            color: var(--white);
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 0 0 var(--radius-md) 0;
            z-index: 10000;
            transition: var(--transition-base);
        }

        .skip-to-main:focus {
            top: 0;
        }

        /* ================= PRINT STYLES ================= */

        @media print {

            .topbar,
            .navbar,
            .main-footer,
            #scrollTop {
                display: none !important;
            }

            body {
                color: #000;
                background: #fff;
            }
        }
    </style>
    <!-- ================= LOADER (OPTIONNEL) ================= -->
    {{-- <div id="preloader"></div> --}}

    <!-- ================= HEADER ================= -->
    @include('frontend.layout.header')

    <!-- ================= CONTENT ================= -->
    <main class="site-content">
        @yield('content')
    </main>

    <!-- ================= FOOTER ================= -->
    @include('frontend.layout.footer')

    <!-- ================= SCROLL TO TOP ================= -->
    <button id="scrollTop">
        <i class="bi bi-arrow-up-circle-fill"></i>
    </button>

    <!-- ================= JS ================= -->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Page specific JS -->
    @stack('scripts')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 1000, // Durée de l'animation
                once: true, // L'animation ne se joue qu'une fois
                offset: 100 // Se déclenche 100px avant d'arriver sur l'élément
            });
        });


        // ================= SCROLL TO TOP =================
        document.addEventListener('DOMContentLoaded', function() {
            const scrollTopBtn = document.getElementById('scrollTop');
            const navbar = document.querySelector('.navbar');

            // Afficher/masquer le bouton scroll
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    scrollTopBtn.classList.add('active');
                } else {
                    scrollTopBtn.classList.remove('active');
                }

                // Effet sticky navbar
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Action du bouton
            scrollTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>