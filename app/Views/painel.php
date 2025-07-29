<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel de Acesso</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 40px;
        }

        .topo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }

        .topo h2 {
            color: #092e48;
        }

        .painel {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            color: #092e48;
            margin-bottom: 40px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            justify-content: center;
        }

        .botao {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: bold;
            color: #092e48;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .botao:hover {
            background-color: #e0e0e0;
        }

        .logout {
            background-color: #1a5e91;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
        }

        .logout:hover {
            background-color: #558bb6;
        }
    </style>
</head>
<body>

    <div class="topo">
        <h2>Bem-vindo(a), <?= session('usuario_nome') ?>!</h2>
        <a class="logout" href="<?= base_url('logout') ?>">Sair</a>
    </div>

    <div class="painel">
        <h1>Painel de Acesso</h1>
        <div class="grid">
            <a class="botao" href="<?= base_url('contratos/novo') ?>">Inserir<br>Nova Licitação</a>
            <a class="botao" href="<?= base_url('contratos') ?>">Consultar<br>Licitações vigentes</a>

            <a class="botao" href="<?= base_url('instrumentos/novo') ?>">Inserir<br>Instrumento contratual</a>
            <a class="botao" href="<?= base_url('instrumentos') ?>">Consultar<br>Instrumento contratual vigentes</a>

            <a class="botao" href="<?= base_url('pagamentos/novo') ?>">Inserir<br>Pagamentos por contrato</a>
            <a class="botao" href="<?= base_url('pagamentos') ?>">Consultar<br>Pagamentos por contrato</a>

            <a class="botao" href="<?= base_url('dominios/novo') ?>">Inserir<br>Novo domínio</a>
            <a class="botao" href="<?= base_url('dominios') ?>">Consultar<br>Domínios vigentes</a>
        </div>
    </div>

</body>
</html>
