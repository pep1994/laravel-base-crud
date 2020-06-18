<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        
        @include('components.header')

        <main>
            @yield('main-content')
        </main>

        @include('components.footer')

        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>