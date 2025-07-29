<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Domínios Vigentes</title>
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

    <h2>Domínios Vigentes</h2>

    <?php if (!empty($sucesso)): ?>
        <div class="mensagem-sucesso"><?= $sucesso ?></div>
    <?php endif; ?>
    <div style="text-align: center; margin-bottom: 20px;">
    <input type="text" id="filtroDominios" placeholder="Filtrar domínios..." 
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
                <th>Domínio</th>
                <th>Data que expira</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($dominios)): ?>
                <tr><td colspan="2">Nenhum domínio cadastrado.</td></tr>
            <?php else: ?>
                <?php foreach ($dominios as $d): ?>
                    <tr>
                        <td><?= esc($d['dominio']) ?></td>
                        <td><?= esc(date('d/m/Y', strtotime($d['data_expira']))) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<script>
function normalizar(texto) {
    return texto
        .toLowerCase()
        .normalize("NFD")
        .replace(/[\u0300-\u036f]/g, "") // remove acentos
        .replace(/[^\w\s\/]/g, "")       // mantém letras, números e barra /
        .replace(/\s+/g, " ")
        .trim();
}

document.getElementById('filtroDominios').addEventListener('input', function () {
    const busca = normalizar(this.value);
    const linhas = document.querySelectorAll('table tbody tr');

    linhas.forEach(function (linha) {
        let textoLinha = '';

        linha.querySelectorAll('td').forEach(function (td) {
            textoLinha += ' ' + td.textContent.replace(/\s+/g, ' ').trim();
        });

        textoLinha = normalizar(textoLinha);

        linha.style.display = textoLinha.includes(busca) ? '' : 'none';
    });
});
</script>




</body>
</html>
