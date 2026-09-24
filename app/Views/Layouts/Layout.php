<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
</head>
<body>
    <?= $this->include('Partials/Header') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('Partials/Footer') ?>
</body>
</html>