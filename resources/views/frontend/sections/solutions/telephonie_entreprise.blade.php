@extends('frontend.layout.base')

@section('title','Telephonie entreprise')

@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/telephonie_bg.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12" data-aos="fade-down">
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Solutions</li>
                    </ol> -->
                </nav>
                <h1 class="display-4 fw-bold text-white mb-0">TÉLÉPHONIE D'ENTREPRISE</h1>
                <div class="title-line mx-auto bg-primary mt-3"></div>
            </div>
        </div>
    </div>
</section>

<section class="about-page-content py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="left-content-area pe-lg-4" data-aos="fade-right">
                    <div class="img-wrapper shadow-lg rounded-4 overflow-hidden border-bottom border-primary border-5">
                        <img src="{{ asset('assets/images/telephonie.jpg') }}" alt="Téléphonie d'entreprise Tic@frique" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Une expertise complète pour vos projets <span class="text-primary">Telecom</span></h2>

                    <p class="text-muted mb-4 lead">
                        TIC@FRIQUE vous accompagne dans l'optimisation et la réalisation de vos infrastructures de communication les plus complexes.
                    </p>

                    <div class="expertise-list">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                                        <span><strong>Installation & Maintenance :</strong> Étude, préconisation et entretien d'équipements télécoms.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                                        <span><strong>Audit & Réseau :</strong> Audit complet et câblage structuré de vos réseaux.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                                        <span><strong>Centres d'Appels :</strong> Mise en place et configuration de plateformes de relation client.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                                        <span><strong>Migration Tech :</strong> Adaptation de votre parc téléphonique aux dernières technologies (IP/Cloud).</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                                        <span><strong>Réduction de Coûts :</strong> Stratégies pour une baisse drastique de votre facture téléphonique.</span>
                                    </li>
                                    <li class="d-flex align-items-start mb-3">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 me-3"></i>
                                        <span><strong>Convergence :</strong> Combinaison parfaite entre téléphone filaire, GSM et VoIP.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4" data-aos="zoom-in" data-aos-delay="400">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                            Lancer mon projet <i class="bi bi-telephone-outbound ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection