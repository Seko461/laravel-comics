<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel @yield('title-page','DC')</title>
    <!-- Fontawesome CDN -->
    <script src="https://kit.fontawesome.com/f54afad4a3.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    @include('partials.header')

    @include('partials.main')
    
    @include('partials.footer')
    

</body>

</html>