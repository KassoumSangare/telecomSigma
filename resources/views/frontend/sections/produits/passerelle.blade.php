@extends('frontend.layout.base')
@section('title','Pacerelle')

@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/passerelle_gsm.png') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item"><a href="/" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Solutions</li>
                    </ol> -->
                </nav>
                <h1 class="display-4 fw-bold text-white mb-0">PASSERELLE GSM</h1>
                <div class="title-line mx-auto bg-primary mt-3"></div>
            </div>
        </div>
    </div>
</section>

<section class="about-page-content py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="left-content-area">
                    <div class="img-wrapper position-relative shadow-lg rounded-4 overflow-hidden border-bottom border-primary border-5">
                        <img src="{{ asset('assets/images/passerelle2020.jpg') }}" alt="Passerelle GSM TICAFRIQUE" class="img-fluid w-100 h-auto">
                        <div class="img-floating-label">Technologie GSM</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area ps-lg-5">
                    <h2 class="fw-bold mb-4">Optimisez votre infrastructure avec nos <span class="text-primary">Passerelles GSM</span></h2>

                    <p class="text-muted mb-4 lead">
                        Les Passerelles GSM de TICAFRIQUE sont conçues pour offrir une flexibilité maximale à vos communications d'entreprise.
                    </p>

                    <div class="gsm-features">
                        <div class="d-flex align-items-start mb-4">
                            <div class="feature-icon bg-primary-soft rounded-circle p-3 me-3">
                                <i class="bi bi-graph-down-arrow text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Économies Drastiques</h5>
                                <p class="text-muted mb-0">Améliorez la qualité d’écoute et réduisez drastiquement le coût de vos appels vers les mobiles.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="feature-icon bg-primary-soft rounded-circle p-3 me-3">
                                <i class="bi bi-telephone-plus text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Capacité Accrue</h5>
                                <p class="text-muted mb-0">Augmentez la capacité de vos autocoms en termes d’appels simultanés et de nombre de lignes disponibles.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start mb-4">
                            <div class="feature-icon bg-primary-soft rounded-circle p-3 me-3">
                                <i class="bi bi-shield-check text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Continuité de Service</h5>
                                <p class="text-muted mb-0">Assurez une disponibilité téléphonique totale même en cas de panne de votre ligne fixe (Backup).</p>
                            </div>
                        </div>
                    </div>



                    <div class="mt-4 pt-3">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow">Demander une étude gratuite</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection