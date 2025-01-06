<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhores Voltas</title>
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
    <h1>Melhores Voltas</h1>
    <table>
        <thead>
            <tr>
                <th>Código Piloto</th>
                <th>Nome Piloto</th>
                <th>Melhor Volta</th>
                <th>Número da Volta</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bestLaps as $lap)
                <tr>
                    <td>{{ $lap['kart_number'] }}</td>
                    <td>{{ $lap['pilot_name'] }}</td>
                    <td>{{ $lap['time_lap_formatted'] }}</td>
                    <td>{{ $lap['lap_number'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
