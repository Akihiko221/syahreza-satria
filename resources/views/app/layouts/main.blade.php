<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="max-w-lg pt-8 pb-16 mx-auto font-primary">
    {{-- Profile --}}
    @include('app.includes.profile')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('app.includes.footer')

    {{-- Navbar --}}
    @include('app.includes.navbar')
</body>

</html>
