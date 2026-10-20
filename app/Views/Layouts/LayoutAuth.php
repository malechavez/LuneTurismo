<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/footer.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/auth/authHeader.css') ?>">
    <?= $this->renderSection('cssExtra') ?>
</head>
<body>
    <?= $this->include('Partials/HeaderAuth') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('Partials/Footer') ?>
</body>
</html>