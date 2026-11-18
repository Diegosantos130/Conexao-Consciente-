<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($title ?? 'Conexão Consciente') ?></title>
    <link rel="icon" href="<?= asset('assets/favicon.ico') ?>" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= asset('css/bootstrap-theme.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/estilo.css') ?>">
</head>
<body class="d-flex flex-column min-vh-100">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="<?= url('user/index') ?>">Conexão Consciente</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuPrincipal">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="<?= url('user/index') ?>">Pessoas cadastradas</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= url('user/create') ?>">Cadastrar pessoa</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?= $content ?>
    </main>
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5"><p class="m-0 text-center text-white">Conexão Consciente · Projeto MVC</p></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= asset('js/app.js') ?>" defer></script>
    <script src="<?= asset('js/template.js') ?>" defer></script>
</body>
</html>
