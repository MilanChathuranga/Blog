<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}


    @include('layouts.sections.styles')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>

<!-- Preloader -->
@include('layouts.sections.preloader.preloader')

<!-- Top Header Section -->
@include('layouts.sections.header.header')
{{--@include('frontend.layout.header')--}}

<!-- Menu Section -->
@include('layouts.sections.menu.menu')

@yield('page_header')
@yield('content')

@include('layouts.sections.footer.footer')

<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>--}}

<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>


<script type="text/javascript">
    CKEDITOR.replace('post_content_editor_edit');
    CKEDITOR.replace('post_content_editor');
</script>


@include('layouts.sections.scripts')
@stack('scripts')


@include('sweetalert::alert')
</body>
</html>
