<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<!-- Header -->
 @include('layout.header')
<!-- Main Content -->
<main class="container mt-4">
    @yield('content')
</main>

<!-- Footer -->
<footer class="text-center mt-4">
    <p>&copy; 2024 My Website. All rights reserved.</p>
</footer>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
