<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="css/kube.css" />--}}
    <link rel="stylesheet" href="{{"css/font-awesome.min.css"}}" />
    <link rel="stylesheet" href="{{"css/custom.css"}}" />
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pacifico" rel="stylesheet">
    <style>
        .intro h1:before {
            /* Edit this with your name or anything else */
            content: 'NEILUS';
        }
    </style>

</head>
<body>
    <div id="app">
    @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

        @include('inc.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/typed.min.js') }}"></script>
    <script src="{{ asset('js/kube.js') }}"></script>
    <script src="{{ asset('js/site.js') }}"></script>
    <script>
        function newTyped(){}$(function(){$("#typed").typed({
            // Change to edit type effect
            strings: ["professionalism", "speed", "timming"],

            typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
    </script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
