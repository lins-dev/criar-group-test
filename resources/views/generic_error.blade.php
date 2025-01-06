<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
            padding: 20px;
            border: 1px solid #f5c6cb;
            background-color: #f8d7da;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1rem;
            margin: 5px 0;
        }
        a {
            color: #0056b3;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>Oops! Algo deu errado.</h1>
        <p>{{ $message ?? 'Ocorreu um erro inesperado. Por favor, tente novamente mais tarde.' }}</p>
        <p>
            <a href="{{ url('/') }}">Voltar para a página inicial</a>
        </p>
    </div>
</body>
</html>
