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

    input[type="email"],
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
        <form action="<?= base_url('login/verificarEmail') ?>" method="post">
            <label for="email">Digite seu e-mail cadastrado</label>
            <input type="email" name="email" id="email" required>
            <button type="submit">Continuar</button>
        </form>

        <a class="voltar" href="<?= base_url('login') ?>">Voltar ao login</a>

        <?php if (session()->getFlashdata('mensagem')): ?>
            <p class="mensagem"><?= session()->getFlashdata('mensagem') ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
