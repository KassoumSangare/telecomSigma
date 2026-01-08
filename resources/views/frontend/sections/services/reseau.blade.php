@extends('frontend.layout.base')
@section('title','reseau')
@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/reseau_bg.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12" data-aos="fade-down">
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Solutions</li>
                    </ol>
                </nav> -->
                <h1 class="display-4 fw-bold text-white mb-0">INFRASTRUCTURE RÉSEAU</h1>
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
                        <img src="{{ asset('assets/images/reseau2.jpg') }}" alt="Audit et installation réseau TicAfrique" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Un réseau <span class="text-primary">performant</span> pour votre entreprise</h2>

                    <p class="lead text-dark fw-normal mb-4">
                        Bénéficiez d’une infrastructure robuste, qu’elle soit informatique ou téléphonique, grâce à un câblage certifié ou une couverture Wi-Fi optimale.
                    </p>

                    <p class="text-muted mb-4">
                        Chez <strong>TICAFRIQUE</strong>, nous concevons des réseaux évolutifs qui supportent vos flux de données et de voix sans interruption.
                    </p>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="p-4 border rounded-4 bg-light shadow-sm h-100">
                                <i class="bi bi-wifi text-primary fs-1 mb-3"></i>
                                <h5 class="fw-bold">Réseau Sans Fil (Wi-Fi)</h5>
                                <p class="small text-muted mb-0">Déploiement de bornes haute densité pour une couverture totale et sécurisée de vos locaux.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 border rounded-4 bg-light shadow-sm h-100 border-primary">
                                <i class="bi bi-ethernet text-primary fs-1 mb-3"></i>
                                <h5 class="fw-bold">Réseau Câblé</h5>
                                <p class="small text-muted mb-0">Câblage structuré informatique et téléphonique pour une stabilité maximale des transferts.</p>
                            </div>
                        </div>
                    </div>



                    <div class="text-start" data-aos="zoom-in" data-aos-delay="300">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow d-inline-flex align-items-center">
                            <span>Contactez-nous immédiatement</span>
                            <i class="bi bi-arrow-right-circle ms-2 fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection