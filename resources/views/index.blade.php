@extends('layouts.app')
@section('content')
<div class="teste">
    <form action="{{ route('pesquisa')}}" method="GET">
        <input type="text" name="pesquisa" placeholder="Digite sua palavra e pesquise">
        <input type="submit" value="Pesquisar">
    </form>

</div>
@endsection