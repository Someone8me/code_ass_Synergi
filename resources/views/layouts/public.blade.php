<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>


        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
	
	<div class="wrapper {{ $wrapper_class }}">
        @include('inc.topnav')
        @yield('content')
	</div><!--theme-layout end-->

    <script src="{{ asset('js/app.js') }}" defer></script>

    </body>
</html>

