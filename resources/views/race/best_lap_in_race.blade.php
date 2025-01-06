<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhor Volta da Corrida</title>
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
    <h1>Melhor Volta da Corrida</h1>
    <table>
        <thead>
            <tr>
                <th>Código Piloto</th>
                <th>Nome Piloto</th>
                <th>Número da Volta</th>
                <th>Melhor Volta</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $bestLapsInRace->kart_number }}</td>
                <td>{{ $bestLapsInRace->pilot_name }}</td>
                <td>{{ $bestLapsInRace->lap_number }}</td>
                <td>{{ $bestLapsInRace->time_lap }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
