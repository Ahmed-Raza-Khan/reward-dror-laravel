<html>
<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('styles')
    <title>@yield('title', 'Reward Dror - Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashboard-main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/reward-management.css') }}">
</head>

<body>
    <header>
        @include('partials.header')
    </header>

    @yield('content')

    @stack('scripts')
</body>
</html>