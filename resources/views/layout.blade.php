<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Braid Wiki</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

<nav class="navbar navbar-dark bg-dark p-2">
    <a href="{{ route('characters.index') }}" class="navbar-brand ms-3">Braid-вики</a>
</nav>

@yield('content')

</body>
</html>
