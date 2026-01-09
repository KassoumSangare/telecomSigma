@extends('frontend.layout.base')

@section('title','antenne')

@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/images.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12" data-aos="fade-down" data-aos-duration="1000">
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Solutions</li>
                    </ol> -->
                </nav>
                <h1 class="display-4 fw-bold text-white mb-0">ANTENNES GSM & WIFI</h1>
                <div class="title-line mx-auto bg-primary mt-3"></div>
            </div>
        </div>
    </div>
</section>

<section class="service-page-timeline py-5 bg-light overflow-hidden">
    <div class="container">
        <div class="row position-relative">

            <div class="timeline-divider d-none d-lg-block"></div>

            <div class="col-lg-5 col-md-6 mb-5 mb-md-0">
                <div class="timeline-card shadow-lg rounded-4 overflow-hidden bg-white" data-aos="fade-right" data-aos-duration="1200">
                    <div class="thumb position-relative">
                        <img src="{{ asset('assets/images/gsm.jpg') }}" alt="GSM" class="img-fluid w-100">
                        <span class="badge-certif">Certifié CE & RoHS</span>
                    </div>
                    <div class="content p-4">
                        <h4 class="fw-bold text-primary mb-3"><i class="bi bi-reception-4 me-2"></i>ANTENNES GSM</h4>
                        <p class="text-muted mb-3">
                            Les antennes GSM et WIFI de <strong>TIC@FRIQUE</strong> ne représentent aucun danger pour la santé car certifiées CE et RoHS reconnus globalement.
                        </p>
                        <p class="text-muted small">
                            Nos solutions permettent d’amplifier la couverture du signal GSM, 3G et 4G de votre opérateur.
                            Grâce à des partenaires fiables, nous proposons des équipements multitechnologies des plus grandes marques.
                        </p>
                        <div class="mt-3 p-2 bg-light rounded border-start border-primary border-4 small">
                            <i class="bi bi-shield-check-fill text-success me-2"></i> Sécurité sanitaire garantie.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 offset-lg-2 mt-lg-5 mt-0">
                <div class="timeline-card shadow-lg rounded-4 overflow-hidden bg-white" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="thumb">
                        <img src="{{ asset('assets/images/wifi.jpg') }}" alt="WIFI" class="img-fluid w-100">
                    </div>
                    <div class="content p-4">
                        <h4 class="fw-bold text-info mb-3"><i class="bi bi-wifi me-2"></i>ANTENNES WIFI</h4>
                        <p class="text-muted mb-3">
                            Nos antennes extérieures et intérieures offrent des performances exceptionnelles pour des architectures réseau robustes.
                        </p>
                        <div class="wifi-check-list mb-3">
                            <h6 class="small fw-bold text-dark">Facteurs de choix :</h6>
                            <ul class="list-unstyled small text-muted">
                                <li><i class="bi bi-check2-circle text-info me-2"></i> Type de signal (GSM, 3G, 4G)</li>
                                <li><i class="bi bi-check2-circle text-info me-2"></i> Nom de l'opérateur local</li>
                                <li><i class="bi bi-check2-circle text-info me-2"></i> Zone de couverture désirée</li>
                            </ul>
                        </div>
                        <p class="text-muted small mb-0">
                            Elles améliorent considérablement la qualité du réseau de votre opérateur pour une expérience utilisateur fluide.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="zoom-in">
                <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow-lg">
                    Consulter un expert <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
            easing: 'ease-out'
        });
    });
</script>
@endsection