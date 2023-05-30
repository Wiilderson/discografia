@extends('layouts.app')
@section('content')
<div class="teste">

    <form action="{{ route('pesquisa')}}" method="GET">
        <input type="text" name="pesquisa" placeholder="Digite sua palavra e pesquise">
        <input type="submit" value="Pesquisar">
    </form>

    <table>

        <tr>
            <th>Album: {{$albuns[0]->name_album}}</th>

        </tr>
        <tr class="tr">
            <td>
                Nº <span>Faixa</span>
            </td>
            <td>
                Duração
            </td>
        </tr>
        @foreach ($albuns as $item)
        <tr class="Td">
            <td>
                {{$item->numero_faixa}} <span>{{$item->faixas}}</span>
            </td>
            <td>
                {{$item->duracao}}
            </td>
        </tr>

        @endforeach
    </table>



</div>
@endsection