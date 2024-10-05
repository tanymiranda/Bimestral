<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        nav {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        nav a {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.1rem;
            margin: 10px 0;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        nav a + a {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Página Inicial</h1>
        <nav>
            <a href="/usuarios.index">Lista de usuários</a><br><br>
            <a href="/financeiro.index">Lista de contas a pagar e receber</a>
        </nav>
    </div>
</body>
</html>
