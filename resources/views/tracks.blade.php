@extends('layouts.app')
@section('content')

<div class="tracksForm">
    <form method="POST" action="{{ route('faixas.store') }}">
        @csrf
        <div>
            <label class="labelTracks" for="id">Numero Faixa:</label>
            <input class="inputTracksNumber" type="text" name="id" id="id" required>
            <select class="select" name='id_album'>
                <option class="option" value="">Album</option>
                @foreach ($albuns as $dado)
                <option class="option" value="{{ $dado->id }}">{{ $dado->name_album }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="faixa">Faixa:</label>
            <input class="inputFaixa" type="text" name="faixa" id="faixa" required>
        </div>

        <div>
            <label for="duracao">Duração:</label>
            <input class="inputTracksNumber" type="text" name="duracao" id="duracao" required>
        </div>

        <button class="submit" type="submit">Salvar</button>
    </form>
</div>
@endsection