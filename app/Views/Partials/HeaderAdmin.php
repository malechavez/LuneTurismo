
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
                        <a href="<?= site_url('admin/home') ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/activities') ?>">Actividades</a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/accommodations') ?>">Alojamientos</a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/users/list') ?>">Lista de usuarios</a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/auth/loggout') ?>">Cerrar sesión</a>
                    </li>
                    <li>
                        <a href="<?= site_url('admin/users/create') ?>">Nuevo admin</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</header>
