<!DOCTYPE html>
<html>

<head>
    <title>Página PHP</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <div>
            <img src="{{ asset('assets/logo.png') }}" alt="Logo disco">
        </div>

        <span>Discografia</span>
    </header>

    <div class="teste">
        <form method="POST" action="{{ route('album.store') }}">
            @csrf
            <div>
                <label for="album_name">Nome do Álbum:</label>
                <input type="text" name="album_name" id="album_name" required>
            </div>
            <div>
                <button type="submit">Salvar Álbum</button>
            </div>
        </form>

    </div>
</body>

</html>