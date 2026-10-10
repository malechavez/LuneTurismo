```php
<?= $this->extend('Layouts/LayoutAuth') ?>

<?= $this->section('cssExtra') ?>
<link rel="stylesheet" href="<?= base_url('css/auth/login.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="login-section">
    <div class="login-card">
        <h1 class="title">Iniciar sesión</h1>

        <form method="post" action="<?= site_url('/auth/login') ?>">
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Tu contraseña" required>
            </div>

            <button type="submit">Iniciar sesión</button>

            <p class="register-link">
                ¿Todavía no tenés cuenta?
                <a href="<?= site_url('/auth/register') ?>">Crear cuenta</a>
            </p>
        </form>

        <?php if (session()->getFlashdata('errors') !== null): ?>
            <div class="login-errors">
                <?= session()->getFlashdata('errors') ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<?= $this->endSection() ?>
```