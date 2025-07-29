<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Novo Domínio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #092e48;
            margin-bottom: 30px;
            font-size: 200%;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #092e48;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 25px;
            background-color: #eeeeee;
            font-size: 14px;
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }

        button {
            display: block;
            margin: 0 auto;
            background-color: #092e48;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
        }

        .mensagem-sucesso {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<div style="text-align: left; margin-bottom: 20px;">
    <a href="<?= base_url('index.php/painel') ?>" 
       style="
            display: inline-block;
            background-color: #092e48;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            font-size: 14px;
        ">
        ← Voltar
    </a>
</div>
<img src="<?= base_url('assets/img/20170417163932crfsp.webp') ?>" 
     alt="CRF-SP" 
     style="
        position: absolute;
        top: 30px;
        right: 30px;
        height: 20%;
     ">
<body>



    <h2>INSERIR NOVO DOMÍNIO</h2>

    <?php if (session()->getFlashdata('sucesso')): ?>
    <div class="mensagem-sucesso">
        <?= session()->getFlashdata('sucesso') ?>
    </div>
<?php endif; ?>


    <form method="post" action="<?= base_url('dominios/salvar') ?>">
        <label for="dominio">Domínio</label>
        <input type="text" name="dominio" required>

        <label for="data_expira">Data que expira</label>
        <input type="date" name="data_expira" required>

        <button type="submit">Salvar</button>
    </form>

</body>
</html>
