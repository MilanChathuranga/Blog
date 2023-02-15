<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Section Styles -->
@include('layouts.sections.styles')
<!-- Styles -->
    @stack('styles')
</head>
<body>

<!-- Preloader Start -->
@include('layouts.sections.preloader.preloader')

<!-- Top Header Section -->
@include('layouts.sections.header.header')
<!-- Header scripts -->
@include('layouts.header_scripts')

<!-- Menu Section -->
@include('layouts.sections.menu.menu')

<!-- Page Header -->
@yield('page_header')

<!-- Page Content -->
@yield('content')

<!-- Footer -->
@include('layouts.sections.footer.footer')
<!-- Footer scripts -->
@include('layouts.footer_scripts')

<!-- Section Scripts -->
@include('layouts.sections.scripts')

<!-- Scripts -->
@stack('scripts')

<!-- Sweet Alert -->
@include('sweetalert::alert')
</body>
</html>
