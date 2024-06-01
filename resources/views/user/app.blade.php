<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/front/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/front/css/templatemo-topic-listing.css') }}" rel="stylesheet">
</head>

<body>

    @include('user.layouts.header')

    <script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/front/js/click-scroll.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
</body>

</html>