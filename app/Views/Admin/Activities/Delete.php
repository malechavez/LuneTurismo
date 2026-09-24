<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar actividad</title>
</head>

<body>

    <?= $this->extend('Layouts/Layout') ?>

    <?= $this->section('content') ?>

        <h1 class="title">Eliminar actividad</h1>
        <h3>¿Estás seguro de querer eliminar esta actividad?</h3>
        <div class="form">
            <form method="get" action="<?= site_url('admin') ?>">
                <button type="submit">Cancelar</button>
            </form>
            <form method="post" action="<?= site_url('activities/delete/' . $activity['id']) ?>">
                <button type="submit">Eliminar</button>
            </form>

        </div>

    <?= $this->endSection() ?>

</body>
</html>