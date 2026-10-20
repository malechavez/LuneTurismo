
    <?= $this->extend('Layouts/LayoutAdmin') ?>
    <?= $this->section('cssExtra') ?>
        <link rel="stylesheet" href="<?= base_url('css/admin/accommodations/delete.css') ?>">
    <?= $this->endSection() ?>
    <?= $this->section('content') ?>
        <h1 class="title">Deshabilitar Alojamiento</h1>
        <div class="formulario">
            <h3 class="subtitle">¿Estás seguro de querer deshabilitar este alojamiento?</h3>
                <form method="get" action="<?= site_url('admin/home') ?>">
                    <button type="submit">Cancelar</button>
                </form>
                <form method="post" action="<?= site_url('admin/accommodations/delete/' . $accommodation['id']) ?>">
                    <button type="submit">Deshabilitar</button>
                </form>
        </div>
    <?= $this->endSection() ?>
