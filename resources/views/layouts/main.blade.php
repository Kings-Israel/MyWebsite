<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
    	<meta name="keywords" content="">

        <!-- Load Fonts -->
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>

        <title>{{ config('app.name', 'Kings Israel') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('assets/css/basic.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/ionicons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/skills.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="pre-inner">
                        <div class="load typing-load"><p>loading...</p></div>
                        <span class="typed-load"></span>
                    </div>
                </div>
            </div>
        </div>
        {{ $slot }}

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('assets/js/typed.js') }}"></script>
        <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/js/imagesloaded.pkgd.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.js') }}"></script>

        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
