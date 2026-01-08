@extends('frontend.layout.base')

@section('title','autocom IP')

@section('content')
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