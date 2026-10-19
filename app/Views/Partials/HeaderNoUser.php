
<header class="site-header">
    <div class="header-container">

        <div class="header-brand">
            <img
                src="<?= base_url('images/logoLune.png') ?>"
                alt="Logo de Lune"
            >

            <a href="<?= base_url('/') ?>" class="header-logo">
                LUNE
            </a>
        </div>

        <nav class="nav-admin">
            <div class="container-nav">
                <ul class="navbar-nav">
                    <li>
                        <a href="<?= site_url('admin') ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?= site_url('auth') ?>">Actividades</a>
                    </li>
                    <li>
                        <a href="<?= site_url('auth') ?>">Alojamientos</a>
                    </li>
                    <li>
                        <a href="<?= site_url('auth') ?>">Iniciar sesión</a>
                    </li>
                    <li>
                        <a href="<?= site_url('auth/register') ?>">Crear cuenta</a>
                    </li>

                </ul>
            </div>
        </nav>

    </div>
</header>
