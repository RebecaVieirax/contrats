<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Instrumentos Contratuais Vigentes</title>
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

<body>
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
    <h2>Instrumentos Contratuais Vigentes</h2>
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
                <th>Nº PROC</th>
                <th>Objetivo do Contrato</th>
                <th>CRT/ATA</th>
                <th>Empresa Contratada</th>
                <th>CPF/CNPJ</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($instrumentos)): ?>
                <tr><td colspan="5">Nenhum instrumento encontrado.</td></tr>
            <?php else: ?>
                <?php foreach ($instrumentos as $i): ?>
                    <tr>
                        <td><?= esc($i['numero_processo']) ?></td>
                        <td><?= esc($i['objetivo_contrato']) ?></td>
                        <td><?= esc($i['crt_ata']) ?></td>
                        <td><?= esc($i['empresa_contratada']) ?></td>
                        <td><?= esc($i['cpf_cnpj']) ?></td>
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
        </tbody>
    </table>

</body>
</html>
