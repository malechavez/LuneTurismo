<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link rel="stylesheet" href="<?= base_url('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <?= $this->include('Partials/HeaderUser') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('Partials/Footer') ?>
</body>
</html>