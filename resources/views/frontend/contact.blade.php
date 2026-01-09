@extends('frontend.layout.base')

@section('title','Contact - Tic@frique')

@section('content')
<section class="contact-section py-5 position-relative">
    <img src="{{ asset('assets/img/background-contact.jpg') }}" alt="Contact Background" class="bg-contact-img">
    <div class="contact-overlay"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="contact-box shadow-lg rounded-4 overflow-hidden bg-white" data-aos="fade-up">
            <div class="row g-0">

                <div class="col-lg-5">
                    <div class="map-wrapper h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.393452093551!2d-3.985!3d5.35!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMjEnMDAuMCJOIDPCsDU5JzAwLjAiVw!5e0!3m2!1sfr!2sci!4v1700000000000"
                            width="100%" height="100%" style="border:0; min-height: 450px;"
                            allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-form-p p-4 p-md-5">
                        <div class="text-center mb-4">
                            <h3 class="fw-bold text-dark">Nous Contacter</h3>
                            <p class="text-muted small">Demandez un devis gratuit ou des informations</p>
                        </div>

                        @if(session('success'))
                        <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4 d-flex align-items-center">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                        </div>
                        @endif

                        <form id="contact_form_classic" action="{{ route('contact.store') }}" method="POST" class="needs-validation">
                            @csrf

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Nom et Prénoms" class="form-control custom-input @error('nom') is-invalid @enderror" required>
                                    @error('nom') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control custom-input @error('email') is-invalid @enderror" required>
                                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="contact" value="{{ old('contact') }}" placeholder="Téléphone / WhatsApp" class="form-control custom-input @error('contact') is-invalid @enderror">
                                    @error('contact') <div class="invalid-feedback">{{ $message }}</div> @enderror {{-- Corrigé ici --}}
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="entreprise" value="{{ old('entreprise') }}" placeholder="Votre Entreprise" class="form-control custom-input @error('entreprise') is-invalid @enderror">
                                    @error('entreprise') <div class="invalid-feedback">{{ $message }}</div> @enderror {{-- Corrigé ici --}}
                                </div>

                                <div class="col-12">
                                    <textarea name="message" rows="4" placeholder="Comment pouvons-nous vous aider ?" class="form-control custom-input @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                    @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="col-12">
                                    <div class="captcha-box d-flex align-items-center gap-3 p-3 rounded-3 bg-light @error('heure') border border-danger @enderror">
                                        <label class="mb-0 text-dark small fw-bold">Sécurité : Entrez le nombre <span class="text-primary" id="captcha_number">--</span></label>
                                        <input type="hidden" name="captcha_expected" id="captcha_expected">
                                        <input type="text" name="heure" class="form-control text-center" style="width: 80px;" required>
                                    </div>
                                    @error('heure') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg rounded-pill px-5 shadow">
                                        Envoyer ma demande <i class="bi bi-send ms-2"></i>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let num = Math.floor(Math.random() * 90) + 10;
        let display = document.querySelector('#captcha_number');
        let input = document.querySelector('#captcha_expected');

        if (display && input) {
            display.textContent = num;
            input.value = num;
        }
    });
</script>
@endsection