<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- ================= META ================= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title', 'TicAfrique | Solutions Télécom & IT')</title>

    <meta name="description"
        content="TicAfrique propose des solutions de téléphonie d’entreprise, connectivité et interconnexion de sites en Côte d’Ivoire.">
    <meta name="keywords"
        content="Télécom, Téléphonie IP, Connectivité, Réseau, Entreprise, Côte d’Ivoire">
    <meta name="author" content="TicAfrique">

    <!-- ================= FAVICON ================= -->
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

    <!-- ================= CSS ================= -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Page specific CSS -->

    @stack('styles')
</head>

<body>

    <!-- ================= LOADER (OPTIONNEL) ================= -->
    {{-- <div id="preloader"></div> --}}

    <!-- ================= HEADER ================= -->
    @include('frontend.layout.header')

    <!-- ================= CONTENT ================= -->
    <main class="site-content">
        @yield('content')
    </main>

    <!-- ================= FOOTER ================= -->
    @include('frontend.layout.footer')

    <!-- ================= SCROLL TO TOP ================= -->
    <button id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ================= JS ================= -->
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Page specific JS -->
    @stack('scripts')

</body>

</html>