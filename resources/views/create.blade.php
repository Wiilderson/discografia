@extends('layouts.app')
@section('content')

<div class="teste">
    <form method="POST" action="{{ route('album.store') }}">
        @csrf

        <label for="album_name">Nome do Álbum:</label>
        <input class="inputText" type="text" name="album_name" id="album_name" required>

        <input type="submit" value="Salvar Album" />

    </form>

</div>
@endsection