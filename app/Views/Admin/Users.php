<?= $this->extend('Layouts/LayoutAdmin') ?>
    <?= $this->section('cssExtra') ?>
    <link rel="stylesheet" href="<?= base_url('css/admin/activities/index.css') ?>">
    <?= $this->endSection() ?>

    <?= $this->section('content') ?>

        <h1 class="title">Lista de usuarios</h1>
        <div class="tabla-container">
            <table class="mi-tabla">
                <tr>
                    <th class="encabezado">ID</th>
                    <th class="encabezado">ID Rol</th>
                    <th class="encabezado">Nombre</th>
                    <th class="encabezado">Apellido</th>
                    <th class="encabezado">Email</th>
                    <th class="encabezado">Fecha de creacion</th>
                    <th class="encabezado">Fecha de actualizacion</th>
                </tr>
                <?php foreach ($users as $u): ?>
                    <tr class="fila">
                        <td class="celda"><?= $u['id']?></td>
                        <td class="celda"><?= $u['role_id']?></td>
                        <td class="celda"><?= $u['name']?></td>
                        <td class="celda"><?= $u['surname']?></td>
                        <td class="celda"><?= $u['email']?></td>
                        <td class="celda"><?= $u['created_at']?></td>
                        <td class="celda"><?= $u['updated_at']?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?= $this->endSection() ?>