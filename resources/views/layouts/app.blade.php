<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-shit - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-animated min-h-screen text-white">
    <nav class="bg-opacity-75 bg-black p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('shirts.index') }}" class="text-white font-bold text-2xl">T-shit</a>
            <a href="{{ route('cart.index') }}" class="text-white">Cart</a>
        </div>
    </nav>

    <div class="container mx-auto py-10">
        @yield('content')
    </div>

    <footer class="bg-opacity-75 bg-black text-center p-4 mt-10">
        &copy; 2024 T-shit. All rights reserved.
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
