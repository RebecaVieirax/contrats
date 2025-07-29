<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Licitações Vigentes</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #f5f5f5;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #092e48;
            color: white;
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

    <h2>Licitações Vigentes</h2>
    
    <?php if (session()->getFlashdata('sucesso')): ?>
        <div class="mensagem-sucesso">
            <?= session()->getFlashdata('sucesso') ?>
        </div>
    <?php endif; ?>
    <div style="text-align: center; margin-bottom: 20px;">
    <input type="text" id="filtroTabela" placeholder="Filtrar licitações..." 
        style="
            padding: 12px 16px;
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 14px;
            box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
        ">
</div>

    <table>
        <thead>
            <tr>
                <th>Processo Administrativo</th>
                <th>Nome da Empresa</th>
                <th>Serviço</th>
                <th>Gestor do Contrato</th>
                <th>Fiscal</th>
                <th>Fiscal Substituto</th>
                <th>Vigência</th>
                <th>Informações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($contratos)): ?>
                <tr><td colspan="8">Nenhuma licitação encontrada.</td></tr>
            <?php else: ?>
                <?php foreach ($contratos as $c): ?>
                    <tr>
                        <td><?= esc($c['processo_administrativo']) ?></td>
                        <td><?= esc($c['nome_empresa']) ?></td>
                        <td><?= esc($c['servico']) ?></td>
                        <td><?= esc($c['gestor_contrato']) ?></td>
                        <td><?= esc($c['fiscal']) ?></td>
                        <td><?= esc($c['fiscal_substituto']) ?></td>
                        <td><?= esc($c['vigencia']) ?></td>
                        <td><?= esc($c['informacoes']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            <script>
document.querySelectorAll('.filtro-coluna').forEach(function(input) {
    input.addEventListener('keyup', function() {
        const index = this.dataset.coluna;
        const termo = this.value.toLowerCase();
        const linhas = document.querySelectorAll('table tbody tr');

        linhas.forEach(function(linha) {
            const celula = linha.cells[index];
            const conteudo = celula.textContent.toLowerCase();
            const visivel = conteudo.includes(termo);
            linha.style.display = visivel ? '' : 'none';
        });
    });
});
</script>

        </tbody>
        <script>
function normalizar(texto) {
    return texto
        .toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, '') // remove acentos
        .replace(/[^\w\s]/g, '')         // remove símbolos
        .replace(/\s+/g, ' ')            // espaços múltiplos → 1
        .trim();
}

document.getElementById('filtroTabela').addEventListener('input', function () {
    const busca = normalizar(this.value);
    const linhas = document.querySelectorAll('table tbody tr');

    linhas.forEach(function (linha) {
        let textoLinha = '';

        // Junta todo o conteúdo da linha (todas as colunas)
        linha.querySelectorAll('td').forEach(function (td) {
            textoLinha += ' ' + td.textContent;
        });

        textoLinha = normalizar(textoLinha);

        // Se "alexandre" aparecer em qualquer ponto da linha, mostra
        linha.style.display = textoLinha.includes(busca) ? '' : 'none';
    });
});
</script>





    </table>


</body>
</html>
