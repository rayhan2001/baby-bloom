<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('frontendAssets/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontendAssets/asset/css/css2.css') }}" rel="stylesheet">
    <link href="{{ asset('frontendAssets/asset/css/styles.css') }}" rel="stylesheet">
    @stack('css')
</head>
<body>
    <!-- Header -->
    @include('frontend.partials.header')

    <!-- Navigation -->
    @include('frontend.partials.navbar')

    @yield('content')

    <!-- Footer -->
    @include('frontend.partials.footer')

    <script src="{{ asset('frontendAssets/asset/js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>
</html>
