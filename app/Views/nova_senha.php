<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nova Senha</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #052c48;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #0d3c5e;
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        label {
            color: white;
            display: block;
            margin-bottom: 10px;
            text-align: left;
            font-weight: bold;
        }

        input[type="password"],
        button {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            background-color: #1a5e91;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .voltar {
            display: block;
            margin-top: 10px;
            font-size: 13px;
            color: white;
            text-decoration: underline;
        }

        .mensagem {
            margin-top: 15px;
            color: #ffcccc;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?= base_url('login/salvarNovaSenha') ?>" method="post">
            <h2 style="color:white;">Nova Senha</h2>

            <input type="hidden" name="usuario_id" value="<?= $usuario_id ?>">

            <label>Nova senha:</label>
            <input type="password" name="senha" required>

            <label>Confirmar nova senha:</label>
            <input type="password" name="confirmar" required>

            <button type="submit">Salvar</button>
        </form>

        <a class="voltar" href="<?= base_url('login') ?>">Voltar ao login</a>

        <?php if (session()->getFlashdata('mensagem')): ?>
            <p class="mensagem"><?= session()->getFlashdata('mensagem') ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
