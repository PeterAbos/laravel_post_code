<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Postoffice</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{ route('counties.index') }}">Counties</a></li>
            <li><a href="{{ route('cities.index') }}">Cities</a></li>
        </ul>
    </header>
    <main>
        @yield('content')
    </main>
    <footer></footer>
</body>
</html>