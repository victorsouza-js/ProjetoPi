<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/imgs/logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PowerUp Suplementos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRxl6S6z59pPt5eCF/tZEV2AVi6G7A5pM7ELyNHBQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoMXxZlZWuWt4SAn1LlKkB1KVyS43Ro/eT1Fkw6Pp5vi5Qf" crossorigin="anonymous"></script>
</body>
</html>