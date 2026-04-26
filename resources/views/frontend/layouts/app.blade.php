<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Storefront</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brand-bg text-brand-text font-sans antialiased flex flex-col min-h-screen m-0 p-0">
    
    @include('frontend.components.header')

    <main class="flex-grow w-full m-0 p-0">
        @yield('content')
    </main>

    @include('frontend.components.footer')

</body>
</html>