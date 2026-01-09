<header class="main-header">
    <section class="topbar d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-2">
                <a href="/" class="navbar-brand me-0">
                    <img src="{{ asset('assets/images/logofini.png') }}" alt="Tic@frique Logo" height="45">
                </a>

                <div class="d-flex gap-4">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope-at text-info fs-4"></i>
                        <div class="lh-sm">
                            <small class="d-block text-uppercase opacity-75">Support Technique</small>
                            <span class="fw-bold">support@ticafrique.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-telephone-outbound text-info fs-4"></i>
                        <div class="lh-sm">
                            <small class="d-block text-uppercase opacity-75">Service Client</small>
                            <span class="fw-bold">(+225) 22 00 20 77</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-headset text-info fs-4"></i>
                        <div class="lh-sm">
                            <small class="d-block text-uppercase opacity-75">Email Info</small>
                            <a href="mailto:info@ticafrique.com" class="text-white text-decoration-none fw-bold">info@ticafrique.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a href="/" class="navbar-brand d-lg-none">
                <img src="{{ asset('assets/images/logofini.png') }}" alt="Tic@frique Logo" height="35">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="{{ route('frontend.index') }}">Accueil</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produits
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item" href="{{ route('autocom_ip') }}">Autocom IP</a></li>
                            <li><a class="dropdown-item" href="{{ route('passerelle') }}">Passerelle GSM</a></li>
                            <li><a class="dropdown-item" href="{{ route('antenne') }}">Antennes</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Solutions
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item" href="{{ route('telephonie_entreprise') }}">Téléphonie d’entreprise</a></li>
                            <li><a class="dropdown-item" href="{{ route('connectivite') }}">Connectivité</a></li>
                            <li><a class="dropdown-item" href="{{ route('interconexion') }}">Interconnexion</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu shadow border-0">
                            <li><a class="dropdown-item" href="{{ route('conseil_personnalise') }}">Conseils</a></li>
                            <li><a class="dropdown-item" href="{{ route('installation_maintenance') }}">Installation & Maintenance</a></li>
                            <li><a class="dropdown-item" href="{{ route('reseau') }}">Réseau</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="https://ticafrique.ci/">Portail</a>
                    </li>
                </ul>

                <div class="d-grid d-lg-block">
                    <a href="{{ route('frontend.contact') }}" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
                        <i class="bi bi-file-earmark-text me-2"></i>Demander un devis
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>