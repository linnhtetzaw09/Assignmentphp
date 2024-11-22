<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Club Events</title>
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/img/fav/favicon.png') }}" type="image/png" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}"/>
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.css') }}">
    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/style.css') }}">
</head>
<body>

    <!-- Include Header -->
    @include('layouts.header')

    <main>
        @yield('content') 
    </main>

    <!-- Include Footer -->
    @include('layouts.footer')

    <!-- Bootstrap JS Bundle (with Popper) -->
    <script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('assets/libs/jquery/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
    <!-- jQuery UI JS -->
    <script src="{{ asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.js') }}" type="text/javascript"></script>
    <!-- Lightbox2 JS -->
    <script src="{{ asset('assets/libs/lightbox2-2.11.4/dist/js/lightbox.min.js') }}" type="text/javascript"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/dist/app.js') }}" type="text/javascript"></script>

    <!-- AJAX Script for Event Registration -->
    @yield('scripts')
    
</body>
</html>
