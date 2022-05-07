<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        <header>
            <div class="header__content">
                @include('partials.navbar')
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="footer__content">
            <p>جميع الحقوق محفوظة</p>
            </div>
        </footer>

    </body>
    
</html>
