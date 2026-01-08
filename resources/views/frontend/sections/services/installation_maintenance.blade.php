@extends('frontend.layout.base')

@section('title','installation_maintenance')
@section('content')
<section class="hero-breadcrumb py-5 position-relative" style="background: url('{{ asset('assets/images/installation_bg.jpg') }}') center/cover no-repeat;">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 3;">
        <div class="row text-center">
            <div class="col-lg-12" data-aos="fade-down">
                <!-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase mb-2">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
                    </ol>
                </nav> -->
                <h1 class="display-4 fw-bold text-white mb-0">INSTALLATION & MAINTENANCE</h1>
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
                        <img src="{{ asset('assets/images/installation.jpg') }}" alt="Installation et maintenance informatique" class="img-fluid w-100" style="object-fit: cover; max-height: 600px;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="right-content-area" data-aos="fade-left">
                    <h2 class="fw-bold mb-4">Maintenance et <span class="text-primary">Dépannage Réactif</span></h2>

                    <p class="text-muted mb-4">
                        Nous assurons l'installation, la configuration et la maintenance rigoureuse de l'ensemble de vos équipements téléphoniques et informatiques.
                    </p>

                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-4">
                            <div class="equipment-item text-center p-3 border rounded shadow-sm">
                                <i class="bi bi-cpu text-primary fs-3"></i>
                                <p class="small fw-bold mb-0 mt-2">Serveurs</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="equipment-item text-center p-3 border rounded shadow-sm">
                                <i class="bi bi-telephone-plus text-primary fs-3"></i>
                                <p class="small fw-bold mb-0 mt-2">Autocoms</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="equipment-item text-center p-3 border rounded shadow-sm">
                                <i class="bi bi-router text-primary fs-3"></i>
                                <p class="small fw-bold mb-0 mt-2">Routeurs</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="equipment-item text-center p-3 border rounded shadow-sm">
                                <i class="bi bi-laptop text-primary fs-3"></i>
                                <p class="small fw-bold mb-0 mt-2">Ordinateurs</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="equipment-item text-center p-3 border rounded shadow-sm">
                                <i class="bi bi-signal text-primary fs-3"></i>
                                <p class="small fw-bold mb-0 mt-2">Passerelles</p>
                            </div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="equipment-item text-center p-3 border rounded shadow-sm">
                                <i class="bi bi-diagram-3 text-primary fs-3"></i>
                                <p class="small fw-bold mb-0 mt-2">Réseaux</p>
                            </div>
                        </div>
                    </div>



                    <div class="contract-box p-4 rounded-4 bg-light border-start border-primary border-5" data-aos="fade-up">
                        <h4 class="fw-bold mb-3"><i class="bi bi-file-earmark-text me-2"></i>Contrats de maintenance</h4>
                        <p class="small text-muted mb-4">Nos contrats sur mesure sont conçus pour garantir la pérennité de votre infrastructure :</p>

                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <div class="icon-check me-3 bg-white shadow-sm rounded-circle p-1">
                                    <i class="bi bi-check2 text-success fw-bold"></i>
                                </div>
                                <span class="small"><strong>Taux de disponibilité :</strong> Un accès optimum et continu à vos services.</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <div class="icon-check me-3 bg-white shadow-sm rounded-circle p-1">
                                    <i class="bi bi-check2 text-success fw-bold"></i>
                                </div>
                                <span class="small"><strong>Performance :</strong> Niveau d'efficacité garanti pour vos machines et votre réseau.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-4 pt-2">
                        <a href="{{ route('frontend.contact') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow animate__animated animate__pulse animate__infinite">
                            Demander une intervention
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection