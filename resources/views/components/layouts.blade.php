<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica Telefonica</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="">
    @include('components.navbar')

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
