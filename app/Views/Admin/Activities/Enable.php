    <?= $this->extend('Layouts/LayoutAdmin') ?>
    <?= $this->section('cssExtra') ?>
        <link rel="stylesheet" href="<?= base_url('css/admin/activities/delete.css') ?>">
    <?= $this->endSection() ?>
    <?= $this->section('content') ?>
        <h1 class="title">Habilitar Actividad</h1>
        <div class="formulario">
            <h3 class="subtitle">¿Estás seguro de querer habilitar esta actividad?</h3>
                <form method="get" action="<?= site_url('admin/home') ?>">
                    <button type="submit">Cancelar</button>
                </form>
                <form method="post" action="<?= site_url('admin/activities/activate/' . $activity['id']) ?>">
                    <button type="submit">Habilitar</button>
                </form>
        </div>
    <?= $this->endSection() ?>