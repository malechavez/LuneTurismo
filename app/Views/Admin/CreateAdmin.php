```php
<?= $this->extend('Layouts/LayoutAuth') ?>

<?= $this->section('cssExtra') ?>
<link rel="stylesheet" href="<?= base_url('css/admin/register.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="register-section">
    <div class="register-card">

        <h1 class="title">Crear nuevo administrador</h1>
        <p class="register-subtitle">Completá tus datos para registrarte en Lune.</p>

        <form method="post" action="<?= site_url('/admin/users/store') ?>">

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre" value="<?= old('name') ?>" required>
            </div>

            <div class="form-group">
                <label for="surname">Apellido</label>
                <input type="text" id="surname" name="surname" placeholder="Tu apellido" value="<?= old('surname') ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" value="<?= old('email') ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Mínimo 6 caracteres" required>
            </div>

            <div class="form-group">
                <label for="confirmpassword">Repetir contraseña</label>
                <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Repetí tu contraseña" required>
            </div>

            <button type="submit">Crear cuenta</button>

            <p class="login-link">
                ¿Ya tenés una cuenta?
                <a href="<?= site_url('/auth') ?>">Iniciar sesión</a>
            </p>

        </form>

        <?php if (session()->getFlashdata('errors') !== null): ?>
            <div class="register-errors">
                <?= session()->getFlashdata('errors') ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<?= $this->endSection() ?>
```