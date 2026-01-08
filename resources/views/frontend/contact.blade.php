@extends('frontend.layout.base')

@section('title','contact')

@section('content')
<section class="contact-section py-5 position-relative">
    <img src="assets/img/background-contact.jpg" alt="Contact Background" class="bg-contact-img">
    <div class="contact-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="contact-box shadow-lg rounded-4 overflow-hidden bg-white">
            <div class="row g-0">

                <div class="col-lg-5">
                    <div class="map-wrapper h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1369294715514!2d-3.9934646263571305!3d5.3960976352397125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc194a6d23e34df%3A0xb57679beb78c7b98!2sTICAFRIQUE!5e0!3m2!1sfr!2sci!4v1767798653746!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            width="100%"
                            height="100%"
                            style="border:0; min-height: 450px;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form-p p-4 p-md-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-dark">Nous Contacter</h3>
                            <p class="text-muted small">Demandez un devis gratuit ou des informations</p>
                        </div>

                        <form id="contact_form_classic" method="POST" class="needs-validation">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nom" placeholder="Nom et Prénoms" class="form-control custom-input" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email professionnel" class="form-control custom-input" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="contact" placeholder="Téléphone / WhatsApp" class="form-control custom-input">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="entreprise" placeholder="Votre Entreprise" class="form-control custom-input">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" rows="5" placeholder="Comment pouvons-nous vous aider ?" class="form-control custom-input textarea" required></textarea>
                                </div>

                                <div class="col-12">
                                    <div class="captcha-box d-flex align-items-center gap-3 p-3 rounded-3 bg-light">
                                        <label class="mb-0 text-dark small fw-bold">Sécurité : Entrez le nombre <span class="text-primary" id="captcha_number">13</span></label>
                                        <input type="text" name="heure" class="form-control text-center" style="width: 80px;" required>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button type="submit" name="post" class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                                        Obtenir un devis <i class="bi bi-send ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection