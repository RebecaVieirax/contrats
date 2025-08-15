<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Pagamento</title>
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

        input {
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
        select {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: none;
    border-radius: 20px;
    background-color: #f2f2f2;
    box-shadow: inset 1px 1px 3px #ccc;
    font-size: 14px;
    color: #333;
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
        <h2>INSERIR PAGAMENTOS POR CONTRATO</h2>

        <?php if (session()->getFlashdata('sucesso')): ?>
            <div class="mensagem-sucesso"><?= session()->getFlashdata('sucesso') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('pagamentos/salvar') ?>" method="post">
            <label>Empresa</label>
            <input type="text" name="empresa" required>

            <label>Mês</label>
<select name="mes" >
    <option value="">Selecione o mês</option>
    <option value="Janeiro">Janeiro</option>
    <option value="Fevereiro">Fevereiro</option>
    <option value="Março">Março</option>
    <option value="Abril">Abril</option>
    <option value="Maio">Maio</option>
    <option value="Junho">Junho</option>
    <option value="Julho">Julho</option>
    <option value="Agosto">Agosto</option>
    <option value="Setembro">Setembro</option>
    <option value="Outubro">Outubro</option>
    <option value="Novembro">Novembro</option>
    <option value="Dezembro">Dezembro</option>
</select>



            <label>Valor pago</label>
<input type="text" name="valor_pago" id="valor_pago" required>



            <label>NF/Fatura</label>
            <input type="text" name="nf_fatura" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
    <script>
document.getElementById('valor_pago').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, '');
    value = (value / 100).toFixed(2) + '';
    value = value.replace('.', ',');
    value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    e.target.value = 'R$ ' + value;
});
</script>

</body>
</html>
