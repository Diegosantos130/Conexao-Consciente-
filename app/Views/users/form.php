<section class="py-5">
    <div class="container px-4 px-lg-5 my-4">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="mb-4">
                    <span class="text-primary fw-semibold text-uppercase small">Novo registro</span>
                    <h1 class="display-6 fw-bolder mb-1"><?= e($title) ?></h1>
                    <p class="text-muted">Preencha os campos abaixo para adicionar uma pessoa ao sistema.</p>
                </div>
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <form method="post" action="<?= url('user/store') ?>" data-validate>
                            <input type="hidden" name="csrf" value="<?= e($csrf) ?>">
                            <div class="mb-3">
                                <label for="nome" class="form-label fw-semibold">Nome completo</label>
                                <input class="form-control form-control-lg <?= isset($errors['nome']) ? 'is-invalid' : '' ?>" id="nome" name="nome" maxlength="100" value="<?= e($old['nome'] ?? '') ?>" required autocomplete="name" placeholder="Digite o nome completo">
                                <?php if (isset($errors['nome'])): ?><div class="invalid-feedback"><?= e($errors['nome']) ?></div><?php endif; ?>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">E-mail</label>
                                <input class="form-control form-control-lg <?= isset($errors['email']) ? 'is-invalid' : '' ?>" type="email" id="email" name="email" maxlength="150" value="<?= e($old['email'] ?? '') ?>" required autocomplete="email" placeholder="exemplo@email.com">
                                <?php if (isset($errors['email'])): ?><div class="invalid-feedback"><?= e($errors['email']) ?></div><?php endif; ?>
                            </div>
                            <div class="mb-4">
                                <label for="senha" class="form-label fw-semibold">Senha</label>
                                <input class="form-control form-control-lg <?= isset($errors['senha']) ? 'is-invalid' : '' ?>" type="password" id="senha" name="senha" minlength="8" maxlength="72" required autocomplete="new-password" placeholder="Mínimo de 8 caracteres">
                                <?php if (isset($errors['senha'])): ?><div class="invalid-feedback"><?= e($errors['senha']) ?></div><?php endif; ?>
                                <div class="form-text">A senha será armazenada com hash, não em texto puro.</div>
                            </div>
                            <div class="d-flex flex-column flex-sm-row gap-2">
                                <button class="btn btn-primary btn-lg" type="submit"><i class="bi bi-check-lg me-2"></i>Salvar cadastro</button>
                                <a class="btn btn-outline-secondary btn-lg" href="<?= url('user/index') ?>">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
