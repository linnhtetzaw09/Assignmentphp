<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Club Page</title>
    <!-- fav icon -->
    <link rel="icon" href="{{ asset('assets/img/fav/favicon.png') }}" type="image/png" sizes="16x16">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3.2-dist/css/bootstrap.min.css') }}"/>
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- jquery ui css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.css') }}">
    <!-- lightbox2 css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/lightbox2-2.11.4/dist/css/lightbox.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('assets/dist/style.css') }}">
     <!-- extra css -->
     @yield('css')

</head>
<body>

@extends('layouts.header')


@yield('content')  


@extends('layouts.footer')


<!-- bootstrap js -->
<script src="{{ asset('assets/libs/bootstrap-5.3.2-dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- jquery js -->
<script src="{{ asset('assets/libs/jquery/jquery-3.7.1.min.js') }}" type="text/javascript"></script>
<!-- jquery ui js -->
<script src="{{ asset('assets/libs/jquery-ui-1.13.2/jquery-ui.min.js') }}" type="text/javascript"></script>
<!-- lightbox2 js -->
<script src="{{ asset('assets/libs/lightbox2-2.11.4/dist/js/lightbox.min.js') }}" type="text/javascript"></script>
<!-- custom js -->
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<!-- extra js -->
@yield('scripts')
    
</body>
</html>
