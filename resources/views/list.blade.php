@extends('layouts.app')
@section('content')
<div class="teste">

    @foreach ($albuns as $item)
    <table>
        <tr>
            <th>Album: {{$item->name_album}}</th>
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
                {{$faixa->duracao}}
            </td>
        </tr>
        @endforeach
    </table>
    @endforeach
</div>
@endsection