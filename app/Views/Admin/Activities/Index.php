<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades</title>
</head>

<body>

    <?= $this->extend('Layouts/Layout') ?>

    <?= $this->section('content') ?>

        <h1 class="title">Actividades disponibles</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Locacion</th>
                <th>Lugares disponibles</th>
                <th>Precio</th>
                <th>Descripcion</th>
                <th>Imagenes</th>
                <th>Acciones</th>
            </tr>
            <?php foreach ($activities as $u): ?>
                <tr>
                    <td><?= $u['id']?></td>
                    <td><?= $u['name']?></td>
                    <td><?= $u['category']?></td>
                    <td><?= $u['location']?></td>
                    <td><?= $u['available_slots']?></td>
                    <td><?= $u['price']?></td>
                    <td><?= $u['description']?></td>
                    <td>
                        <img src="<?= base_url('images/activities/' . $u['image1']) ?>" width="150">

                        <?php if ($u['image2'] != null): ?>
                            <img src="<?= base_url('images/activities/' . $u['image2']) ?>" width="150">
                        <?php endif; ?>

                        <?php if ($u['image3'] != null): ?>
                            <img src="<?= base_url('images/activities/' . $u['image3']) ?>" width="150">
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="<?=  site_url('/activities/edit/'. $u['id']) ?>">Editar</a>
                        <a href="<?= site_url('/activities/delete/' .$u['id']) ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="contenedor-agregar">
        <a class="agregar" href="<?= site_url('/activities/create') ?>">Agregar actividad</a>
        </div>
        
    <?= $this->endSection() ?>

</body>
</html>
