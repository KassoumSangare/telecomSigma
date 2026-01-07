<footer class="main-footer bg-dark text-white pt-5 pb-3">
    <div class="container">
        <div class="row g-4 mb-5">

            <div class="col-lg-3 col-md-6">
                <div class="footer-col">
                    <img src="{{ asset('assets/images/logofini.png') }}" alt="TicAfrique" class="footer-logo mb-3" style="max-height: 60px;">
                    <p class="text-white-50 small">
                        TicAfrique accompagne les entreprises dans leurs projets
                        de téléphonie, connectivité et interconnexion avec des
                        solutions fiables, sécurisées et évolutives.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-col ps-lg-4">
                    <h5 class="footer-title mb-4">Nos Produits</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="{{ url('autocomip') }}" class="text-white-50 text-decoration-none">Autocom IP</a></li>
                        <li><a href="{{ url('passerellegsm') }}" class="text-white-50 text-decoration-none">Passerelle GSM</a></li>
                        <li><a href="{{ url('antenne') }}" class="text-white-50 text-decoration-none">Antennes</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-col">
                    <h5 class="footer-title mb-4">Solutions</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="{{ url('telephonieentreprise') }}" class="text-white-50 text-decoration-none">Téléphonie d’entreprise</a></li>
                        <li><a href="{{ url('connectivite') }}" class="text-white-50 text-decoration-none">Connectivité</a></li>
                        <li><a href="{{ url('interconnexion') }}" class="text-white-50 text-decoration-none">Interconnexion</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-col">
                    <h5 class="footer-title mb-4">Contact</h5>
                    <ul class="list-unstyled footer-contact text-white-50 small">
                        <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i> support@ticafrique.com</li>
                        <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i> (+225) 22 00 20 77</li>
                        <li class="mb-3"><i class="bi bi-geo-alt text-primary me-2"></i> Abidjan – Côte d’Ivoire</li>
                    </ul>
                    <a href="{{ url('contact') }}" class="btn btn-primary rounded-pill px-4 btn-sm shadow-sm mt-2">
                        Demander un devis
                    </a>
                </div>
            </div>

        </div>

        <hr class="border-secondary opacity-25">

        <div class="row align-items-center pt-3">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-white-50 small mb-0">
                    © {{ date('Y') }} <span class="text-white fw-bold">TicAfrique</span>. Tous droits réservés.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-socials">
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle me-2"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
        </div>

    </div>
</footer>