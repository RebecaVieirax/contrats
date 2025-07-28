<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <style>
        body {
            background-color: #052c48;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 450px;
            text-align: center;
        }
        .container h2 {
            color: #092e48;
            margin-bottom: 25px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 14px;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #1a5e91;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
        }
        a {
            font-size: 13px;
            color: #1a5e91;
            display: block;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form action="<?= base_url('login/salvar') ?>" method="post">

            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" required>
            </div>
            <div class="form-group">
                <label for="senha_confirmada">Confirmar senha</label>
                <input type="password" name="senha_confirmada" required>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="<?= base_url('login') ?>">Já tenho conta</a>

    </div>
</body>
</html>
