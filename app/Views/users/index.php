<section class="py-5">
    <div class="container px-4 px-lg-5 my-4">
        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 mb-4">
            <div>
                <span class="text-primary fw-semibold text-uppercase small">Gerenciamento</span>
                <h1 class="display-6 fw-bolder mb-1"><?= e($title) ?></h1>
                <p class="text-muted mb-0">Consulte as pessoas registradas no sistema.</p>
            </div>
            <a class="btn btn-primary btn-lg" href="<?= url('user/create') ?>"><i class="bi bi-person-plus me-2"></i>Cadastrar pessoa</a>
        </div>
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h2 class="h5 mb-0">Lista de pessoas</h2>
                <span class="badge bg-primary rounded-pill"><?= count($users) ?> registro(s)</span>
            </div>
            <div class="card-body p-0">
                <?php if (empty($users)): ?>
                    <div class="text-center py-5 px-3">
                        <i class="bi bi-people display-4 text-secondary"></i>
                        <h3 class="h5 mt-3">Nenhuma pessoa cadastrada</h3>
                        <p class="text-muted">Use o botão acima para realizar o primeiro cadastro.</p>
                    </div>
                <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light"><tr><th class="ps-4">#</th><th>Nome</th><th>E-mail</th><th class="text-end pe-4">Detalhes</th></tr></thead>
                            <tbody>
                                <?php foreach ($users as $u): ?>
                                    <tr>
                                        <td class="ps-4 text-muted"><?= (int) $u['id_usuario'] ?></td>
                                        <td class="fw-semibold"><?= e($u['nome']) ?></td>
                                        <td><?= e($u['email']) ?></td>
                                        <td class="text-end pe-4"><a class="btn btn-sm btn-outline-primary" href="<?= url('user/show/' . (int) $u['id_usuario']) ?>">Visualizar</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
