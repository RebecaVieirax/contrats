<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Instrumento Contratual</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            padding: 40px;
        }

        .formulario {
            max-width: 700px;
            margin: 0 auto;
        }

        h2 {
            text-align: center;
            color: #092e48;
            margin-bottom: 40px;
            font-size: 200%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #092e48;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 20px;
            background-color: #f2f2f2;
            box-shadow: inset 1px 1px 3px #ccc;
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

        button:hover {
            background-color: #1a5e91;
        }

        .mensagem-sucesso {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
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
    <div class="formulario">
        <h2>INSERIR INSTRUMENTO CONTRATUAL</h2>

        <?php if (session()->getFlashdata('sucesso')): ?>
    <div class="mensagem-sucesso">
        <?= session()->getFlashdata('sucesso') ?>
    </div>
<?php endif; ?>


        <form action="<?= base_url('instrumentos/salvar') ?>" method="post">
            <label>Nº PROC</label>
            <input type="text" name="numero_processo" required>

            <label>Objetivo do contrato</label>
            <input type="text" name="objetivo_contrato" required>

            <label>CRT/ATA</label>
            <input type="text" name="crt_ata">

            <label>Empresa contratada</label>
            <input type="text" name="empresa_contratada">

            <label>CPF/CNPJ</label>
            <input type="text" name="cpf_cnpj">
            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
