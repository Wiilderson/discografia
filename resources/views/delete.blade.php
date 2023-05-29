@extends('layouts.app')
@section('content')
<div class="teste">

    @foreach ($albuns as $item)
    <table>
        <tr class="tr">
            <th>Album: {{$item->name_album}}</th>
            <th>
                <form action="{{ route('delete.album', ['id' => $item->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </th>
        </tr>
        <tr class="tr">
            <td>
                Nº <span>Faixa</span>
            </td>
            <td>
                Duração
            </td>
        </tr>

        @foreach ($item->faixas as $faixa)
        <tr class="Td">
            <td>
                {{$faixa->numero_faixa}} <span>{{$faixa->faixas}}</span>
            </td>
            <td>
                <form action="{{ route('delete.faixa', ['id' => $faixa->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endforeach
</div>
@endsection