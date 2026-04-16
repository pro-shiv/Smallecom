<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    @include('layouts.frontend.header')

    <main class="container mx-auto px-4 py-6">
        @yield('content')
    </main>

    @include('layouts.frontend.footer')

</body>
</html>