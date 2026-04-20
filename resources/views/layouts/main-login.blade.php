<html>
<head>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    @stack('styles')
    <title>@yield('title', 'Reward Dror - Login')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="{{ asset('assets/css/login-forgot-new/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login-forgot-new/new-password.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login-forgot-new/forogot-password.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login-forgot-new/forogot-password-verify-code.css') }}">
</head>

<body>
    @yield('content')

    @stack('scripts')
</body>
</html>