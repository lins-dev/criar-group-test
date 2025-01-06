<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados da Corrida</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Resultados da Corrida</h1>
    <table>
        <thead>
            <tr>
                <th>Posição Chegada</th>
                <th>Código Piloto</th>
                <th>Nome Piloto</th>
                <th>Quantidade de Voltas Completadas</th>
                <th>Tempo Total de Prova</th>
                <th>Velocidade Média</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pilots as $pilot)
                <tr>
                    <td>{{ $pilot['position'] }}º</td>
                    <td>{{ $pilot['kart_number'] }}</td>
                    <td>{{ $pilot['pilot_name'] }}</td>
                    <td>{{ $pilot['laps'] }}</td>
                    <td>{{ gmdate('H:i:s', $pilot['total_time']) }}</td>
                    <td>{{ $pilot['total_speed'] / $pilot['laps'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
