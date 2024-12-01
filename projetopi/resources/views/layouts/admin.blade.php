<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('imgs/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PowerUp Suplementos')</title>
    <link rel="stylesheet" href="{{ asset('css/admin-page.css') }}">
</head>
<body>
 

    <main>
        @yield('content')
    </main>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>
</html>