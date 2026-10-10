
    <?= $this->extend('Layouts/LayoutAdmin') ?>

    <?= $this->section('cssExtra') ?>
    <link rel="stylesheet" href="<?= base_url('css/admin/accommodations/index.css') ?>">
    <?= $this->endSection() ?>
    <?= $this->section('content') ?>
        <h1 class="title">Alojamientos disponibles</h1>
        <table class="mi-tabla">
            <tr>
                <th class="encabezado">ID</th>
                <th class="encabezado">Nombre</th>
                <th class="encabezado">Categoria</th>
                <th class="encabezado">Locacion</th>
                <th class="encabezado">Lugares disponibles</th>
                <th class="encabezado">Cantidad maxima de personas</th>
                <th class="encabezado">Precio</th>
                <th class="encabezado">Descripcion</th>
                <th class="encabezado">Imagenes</th>
                <th class="encabezado">Acciones</th>
            </tr>
            <?php foreach ($accommodations as $u): ?>
                <tr>
                    <td class="celda"><?= $u['id']?></td>
                    <td class="celda"><?= $u['name']?></td>
                    <td class="celda"><?= $u['category']?></td>
                    <td class="celda"><?= $u['location']?></td>
                    <td class="celda"><?= $u['available_slots']?></td>
                    <td class="celda"><?= $u['people'] ?></td>
                    <td class="celda"><?= $u['price']?></td>
                    <td class="celda"><?= $u['description']?></td>
                    <td class="celda">
                        <img src="<?= base_url('images/accommodations/' . $u['image1']) ?>" width="150">

                        <?php if ($u['image2'] != null): ?>
                            <img src="<?= base_url('images/accommodations/' . $u['image2']) ?>" width="150">
                        <?php endif; ?>

                        <?php if ($u['image3'] != null): ?>
                            <img src="<?= base_url('images/accommodations/' . $u['image3']) ?>" width="150">
                        <?php endif; ?>
                    </td>
                    <td class="celda">
                        <a class="editar" href="<?=  site_url('/accommodations/edit/'. $u['id']) ?>">Editar</a>
                        <a class="eliminar" href="<?= site_url('/accommodations/delete/' .$u['id']) ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div class="contenedor-agregar">
            <a class="agregar" href="<?= site_url('/accommodations/create') ?>">Agregar alojamiento</a>
        </div>
    <?= $this->endSection() ?>
</body>
</html>