<h1><?= e($title) ?></h1>

<ul class="lista">
    <?php foreach ($users as $u): ?>
        <li>
            <a href="<?= url('user/show/' . (int) $u['id_usuario']) ?>">
                <?= e($u['nome']) ?>
            </a>
            (<?= e($u['email']) ?>)
        </li>
    <?php endforeach; ?>
</ul>