@extends('frontend.layout.base')

@section('title','interconnexion')

@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/interconnexion_bg.jpg') }}') center/cover no-repeat;">
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
                <h1 class="display-4 fw-bold text-white mb-0">INTERCONNEXION DE SITES</h1>
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
                        <img src="{{ asset('assets/images/interconnexion.jpg') }}" alt="Interconnexion de sites distants" class="img-fluid w-100">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Reliez vos sites, <span class="text-primary">unifiez vos ressources</span></h2>

                    <p class="lead text-dark fw-normal mb-4">
                        Optimisez vos ressources et gagnez en productivité en reliant vos différents sites distants de manière sécurisée.
                    </p>

                    <p class="text-muted">
                        La liaison déployée par <strong>TIC@FRIQUE</strong> permet à vos collaborateurs de bénéficier instantanément des applications métiers générées par vos serveurs centraux :
                    </p>



                    <div class="interconnexion-benefits mt-4">
                        <div class="benefit-item d-flex align-items-start mb-3">
                            <div class="icon-circle bg-primary-soft me-3">
                                <i class="bi bi-hdd-network-fill text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Partage de ressources</h6>
                                <p class="small text-muted">Accès commun aux fichiers, serveurs et périphériques.</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-start mb-3">
                            <div class="icon-circle bg-primary-soft me-3">
                                <i class="bi bi-globe2 text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Internet Unifié</h6>
                                <p class="small text-muted">Partage d’une connexion Internet optimisée et sécurisée pour tous les sites.</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-start mb-3">
                            <div class="icon-circle bg-primary-soft me-3">
                                <i class="bi bi-telephone-inbound-fill text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Téléphonie Inter-sites Gratuite</h6>
                                <p class="small text-muted">Standard téléphonique unique et appels internes sans frais entre vos agences.</p>
                            </div>
                        </div>

                        <div class="benefit-item d-flex align-items-start">
                            <div class="icon-circle bg-primary-soft me-3">
                                <i class="bi bi-shield-lock-fill text-primary"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0">Convergence Totale</h6>
                                <p class="small text-muted">Intégration sécurisée de la voix, des données et de l'imagerie vidéo.</p>
                            </div>
                        </div>
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-sm mt-3 rounded-pill px-4 fw-bold">Nous contacter</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection