<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
       <link rel="preconnect" href="https://fonts.gstatic.com"/>
       <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet"/>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        <header class="header">
            <div class="header__content">
                @include('partials.navbar')
            </div>
        </header>

        <main class="main-content">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="footer__content">
                <p>جميع الحقوق محفوظة</p>
            </div>
        </footer>

    </body>
    
</html>
