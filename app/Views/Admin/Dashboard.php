<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>

    <?= $this->extend('Layouts/Layout') ?>

    <?= $this->section('content') ?>

        <button>
            <a href="<?=  site_url('accommodations') ?>">Alojamientos</a>
        </button>

        <button>
            <a href="<?=  site_url('activities') ?>">Actividades</a>
        </button>

    <?= $this->endSection() ?>

</body>
</html>