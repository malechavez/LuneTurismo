
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
                        <a href="<?= site_url('client/home') ?>">Inicio</a>
                    </li>
                    <li>
                        <a href="<?= site_url('client/activities') ?>">Actividades</a>
                    </li>
                    <li>
                        <a href="<?= site_url('client/accommodations') ?>">Alojamientos</a>
                    </li>
                    <li>
                        <a href="<?= site_url('client/misReservas') ?>">Mis reservas</a>
                    </li>
                    <li>
                        <a href="<?= site_url('/auth/loggout') ?>">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</header>
