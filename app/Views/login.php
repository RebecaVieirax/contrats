<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Acesso</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #052c48;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            color: white;
            width: 100%;
            max-width: 400px;
        }
        .container img {
            max-width: 200px;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        label {
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #ffffff;
            display: block;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
        }
        .actions {
            font-size: 12px;
            margin-top: 5px;
            text-align: right;
        }
        .actions a, .register a {
            color: #ffffff;
            text-decoration: none;
        }
        .actions a:hover,
        .register a:hover {
            text-decoration: underline;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #1a5e91;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }
        .register {
            margin-top: 25px;
            font-size: 13px;
        }
        .flash {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php if (session()->getFlashdata('mensagem')): ?>
    <p style="color: WHITE; font-weight: bold;">
        <?= session()->getFlashdata('mensagem') ?>
    </p>
<?php endif; ?>

        <img src="<?= base_url('assets/img/20170417163932crfsp.webp') ?>" alt="Logo CRF-SP">

        <?php if (session()->getFlashdata('erro')): ?>
            <p class="flash"><?= session()->getFlashdata('erro') ?></p>
        <?php endif ?>

        <form action="<?= base_url('login/autenticar') ?>" method="post">
            <div class="form-group">
                <label for="email">USUÁRIO</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">SENHA</label>
                <input type="password" id="senha" name="senha" required>
                <div class="actions">
                    <a href="<?= base_url('login/esqueci') ?>">ESQUECEU A SENHA</a>
                </div>
            </div>
            <button type="submit">ENTRAR</button>
        </form>

        <div class="register">
            OU <a href="<?= base_url('login/cadastrar') ?>">CADASTRE-SE</a>
        </div>
    </div>
</body>
</html>
