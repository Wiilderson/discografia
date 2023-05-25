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
        <form action="pesquisar.php" method="GET">
            <input type="text" name="pesquisa" placeholder="Digite sua palavra e pesquise">
            <input type="submit" value="Pesquisar">
        </form>
        <table>
            <tr>
                <th>Album: Rei do Gado, 1961</th>
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
                    1 <span>Minas gerais</span>
                </td>
                <td class="tdh">
                    3:21
                </td>
            </tr>
        </table>
    </div>
</body>

</html>