<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('page_title' , 'Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('head')

    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('main_content')
        </main>

        <footer>
            @yield('footer_content')
        </footer>

        @yield('scripts')

    </body>
</html>