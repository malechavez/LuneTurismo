
<?= $this->extend('Layouts/LayoutAdmin') ?>

<?= $this->section('cssExtra') ?>
    <link rel="stylesheet" href="<?= base_url('css/admin/dashboard.css') ?>">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <h1 class="title">Administrador de ofertas</h1>
    <div class="btn-container">
        <a class="button" href="<?= site_url('accommodations') ?>">
            Alojamientos
        </a>

        <a  class= "button" href="<?= site_url('activities') ?>">
            Actividades
        </a>
    </div>

<?= $this->endSection() ?>
