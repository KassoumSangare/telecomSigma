@extends('frontend.layout.base')

@section('title','conseil_personnalise')
@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/conseil_bg.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12" data-aos="fade-down">
                <nav aria-label="breadcrumb">
                    <!-- <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                    </ol> -->
                </nav>
                <!-- <h1 class="display-4 fw-bold text-white mb-0">CONSEIL & AUDIT</h1> -->
                <!-- <div class="title-line mx-auto bg-primary mt-3"></div> -->
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
                        <img src="{{ asset('assets/images/conseil.jpg') }}" alt="Conseil numérique TicAfrique" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Accompagnement numérique <span class="text-primary">personnalisé</span></h2>

                    <p class="lead fw-bold text-dark mb-4">
                        Misez sur les technologies pour développer votre entreprise avec TICAFRIQUE.
                    </p>

                    <p class="text-muted mb-4">
                        Nous offrons un conseil numérique adapté aux besoins réels de votre structure. Que ce soit pour une création ou une mise à jour d'infrastructure, nous sommes à vos côtés.
                    </p>

                    <div class="consulting-steps mt-4">
                        <div class="d-flex mb-4">
                            <div class="step-icon text-primary me-3">
                                <i class="bi bi-pencil-square fs-2"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Cahier des Charges</h5>
                                <p class="small text-muted mb-0">Nous vous assistons dans la rédaction précise de vos besoins techniques pour garantir le succès de vos projets téléphoniques et informatiques.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="step-icon text-primary me-3">
                                <i class="bi bi-lightbulb-fill fs-2"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Solutions Adaptées</h5>
                                <p class="small text-muted mb-0">Après analyse, nous sélectionnons et vous proposons les technologies les plus performantes et rentables selon votre budget.</p>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="step-icon text-primary me-3">
                                <i class="bi bi-person-check-fill fs-2"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Suivi Personnalisé</h5>
                                <p class="small text-muted mb-0">Une assistance continue pour assurer que les solutions déployées évoluent au rythme de votre entreprise.</p>
                            </div>
                        </div>
                    </div>



                    <div class="mt-5" data-aos="zoom-in" data-aos-delay="500">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                            Prendre rendez-vous <i class="bi bi-calendar-check ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection