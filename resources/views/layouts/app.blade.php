<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="bg-light text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">
                &copy; {{ date('Y') }} Infra. Todos os direitos reservados.
            </p>
        </div>
    </footer>
    
</body>
</html>
