<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo Após o Vencedor</title>
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
    <h1>Tempo Após o Vencedor</h1>
    <table>
        <thead>
            <tr>
                <th>Código Piloto</th>
                <th>Nome Piloto</th>
                <th>Tempo Total (segundos)</th>
                <th>Tempo Após o Vencedor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diffWinner as $pilot)
                <tr>
                    <td>{{ $pilot['kart_number'] }}</td>
                    <td>{{ $pilot['pilot_name'] }}</td>
                    <td>{{ number_format($pilot['total_time'], 3) }}</td>
                    <td>{{ $pilot['time_after_winner_formatted'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
