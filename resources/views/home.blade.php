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

        <tr class="Td">
            <td>
                {{$item->numero_faixa}} <span>{{$item->faixas}}</span>
            </td>
            <td>
                {{$item->duracao}}
            </td>
        </tr>
    </table>
    @endforeach

</div>
@endsection