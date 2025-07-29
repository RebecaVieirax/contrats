<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Nova Licitação</title>
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
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #092e48;
            color: white;
            font-weight: bold;
            border-radius: 10px;
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
        <h2>INSERIR NOVA LICITAÇÃO</h2>

        <?php if (isset($sucesso)): ?>
    <div class="mensagem-sucesso">
        <?= $sucesso ?>
    </div>
<?php endif; ?>


        <form action="<?= base_url('contratos/salvar') ?>" method="post">
            <label>Processo Administrativo</label>
            <input type="text" name="processo_administrativo" required>

            <label>Nome da Empresa</label>
            <input type="text" name="nome_empresa" required>

            <label>Serviço</label>
            <input type="text" name="servico" required>

            <label>Gestor do contrato</label>
            <input type="text" name="gestor_contrato">

            <label>Fiscal</label>
            <input type="text" name="fiscal">

            <label>Fiscal Substituto</label>
            <input type="text" name="fiscal_substituto">

            <label>Vigência</label>
            <input type="text" name="vigencia">

            <label>Informações</label>
            <textarea name="informacoes" rows="3"></textarea>

            <button type="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
