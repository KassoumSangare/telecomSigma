@extends('frontend.layout.base')
@section('title','connectivite')

@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/connectivite_bg.jpg') }}') center/cover no-repeat;">
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
                <h1 class="display-4 fw-bold text-white mb-0">CONNECTIVITÉ</h1>
                <div class="title-line mx-auto bg-primary mt-3"></div>
            </div>
        </div>
    </div>
</section>

<section class="about-page-content py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="left-content-area pe-lg-4" data-aos="zoom-in">
                    <div class="img-wrapper shadow-lg rounded-4 overflow-hidden border-bottom border-primary border-5">
                        <img src="{{ asset('assets/images/connectivite2.jpg') }}" alt="Solutions de connectivité TicAfrique" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Une connexion stable, <span class="text-primary">partout où vous êtes</span></h2>

                    <p class="lead text-dark fw-normal">
                        Avez-vous un problème de réception des réseaux mobiles ou de la connexion internet ?
                    </p>

                    <p class="text-muted mb-4">
                        <strong>TICAFRIQUE</strong> conçoit des solutions sur mesure pour assurer la stabilité de vos réseaux mobiles et de votre connexion Internet, quel que soit votre environnement, même le plus isolé.
                    </p>



                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 text-center bg-light shadow-sm">
                                <i class="bi bi-building text-primary fs-2 mb-2"></i>
                                <h6 class="fw-bold">Bâtiments</h6>
                                <p class="small text-muted mb-0">Bureaux & Entrepôts</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 text-center bg-light shadow-sm">
                                <i class="bi bi-car-front text-primary fs-2 mb-2"></i>
                                <h6 class="fw-bold">Voitures</h6>
                                <p class="small text-muted mb-0">Flottes & Mobilité</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 border rounded-3 text-center bg-light shadow-sm">
                                <i class="bi bi-ship text-primary fs-2 mb-2"></i>
                                <h6 class="fw-bold">Bateaux</h6>
                                <p class="small text-muted mb-0">Marine & Offshore</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 p-4 rounded-4 bg-primary text-white shadow" data-aos="fade-up" data-aos-delay="300">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="bi bi-broadcast-pin fs-1"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1 fw-bold">Besoin d'un diagnostic ?</h5>
                                <p class="mb-0 opacity-75 small">Nos experts analysent votre zone de couverture gratuitement.</p>
                            </div>
                        </div>
                        <a href="{{ route('frontend.contact') }}" class="btn btn-light btn-sm mt-3 rounded-pill px-4 fw-bold">Nous contacter</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection