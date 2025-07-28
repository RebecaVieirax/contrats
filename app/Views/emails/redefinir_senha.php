<form action="<?= base_url('login/verificarEmail') ?>" method="post">
    <h2>Recuperar Senha</h2>
    <label>Digite seu e-mail cadastrado:</label>
    <input type="email" name="email" required>
    <button type="submit">Continuar</button>
</form>
<?php if (session()->getFlashdata('mensagem')): ?>
    <p style="color: red;"><?= session()->getFlashdata('mensagem') ?></p>
<?php endif; ?>

