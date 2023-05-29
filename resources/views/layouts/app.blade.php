<!DOCTYPE html>
<html>

<head>
    <title>Página PHP</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <div>
            <div>
                <img src="{{ asset('assets/logo.png') }}" alt="Logo disco">
            </div>

            <span>Discografia</span>
        </div>

        <div class="header">
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/list">Albuns</a></li>
                <li><a href="/create">Criar Albuns</a></li>
                <li><a href="/create-tracks">Criar Faixas</a></li>
                <li><a href="/list/action">Config</a></li>
            </ul>
        </div>
    </header>

    <div>
        @yield('content')
    </div>

</body>

</html>