<h1><?= e($title) ?></h1>

<form method="post" action="<?= url('user/store') ?>" data-validate>

    <input type="hidden" name="csrf" value="<?= e($csrf) ?>">

    <label>Nome
        <input name="nome" value="<?= e($old['nome'] ?? '') ?>">
    </label>
    <?php if (isset($errors['nome'])): ?>
        <p class="erro"><?= e($errors['nome']) ?></p>
    <?php endif; ?>

    <label>E-mail
        <input name="email" value="<?= e($old['email'] ?? '') ?>">
    </label>
    <?php if (isset($errors['email'])): ?>
        <p class="erro"><?= e($errors['email']) ?></p>
    <?php endif; ?>

    <label>Senha
        <input type="password" name="senha">
    </label>
    <?php if (isset($errors['senha'])): ?>
        <p class="erro"><?= e($errors['senha']) ?></p>
    <?php endif; ?>

    <button type="submit">Salvar</button>
</form>