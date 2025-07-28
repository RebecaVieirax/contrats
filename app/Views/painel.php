<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color:rgb(255, 255, 255);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color:#092e48;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            color: white;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 22px;
            
        }

        p {
            margin-bottom: 25px;
            font-size: 15px;
        }

        a {
            display: inline-block;
            background-color: #1a5e91;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
        }

        a:hover {
            background-color:rgb(96, 137, 167);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo(a), <?= session('usuario_nome') ?>!</h1>
        <p>Você está logado com sucesso.</p>
        <a href="<?= base_url('logout') ?>">Sair</a>
    </div>
</body>
</html>
