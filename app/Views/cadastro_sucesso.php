<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Concluído</title>
    <style>
        body {
            background-color: #052c48;
            color: white;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .box {
            background: #fff;
            color: #092e48;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
        }
        .box h2 {
            margin-bottom: 20px;
        }
        .box a {
            display: inline-block;
            margin-top: 20px;
            background-color: #092e48;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="box">
        <h2>Cadastro realizado com sucesso!</h2>
        <p>Seu usuário foi criado.</p>
        <a href="<?= base_url('login') ?>">Voltar para o login</a>
    </div>
</body>
</html>
