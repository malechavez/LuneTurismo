<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?= $this->extend('Layouts/LayoutNoUser') ?>
    <?= $this->section('content') ?>
    <main class="flex-grow-1">
        <!--------------------            Imagen de presentacion ----------------------->
        <section class="act-image d-flex align-items-center justify-content-center text-center text-white">
            <div class="container">
                <h2 class="display-3 fw-bold">Actividades</h1>
                    <p class="fg-danger">Cada rincón tiene una historia y cada experiencia, algo especial. Encontrá nuevas formas de descubrir y disfrutar Buenos Aires.</p>
            </div>
        </section>

        <!--------------------            Cards de actividades ----------------------->
        <section class="container my-4">
            <div class="row g-4">
                <?php foreach ($activities as $u): ?>
                    <?php
                    $activityId = $u['id'];
                    $stockMinimo = $disponibilidadPorActividad[$activityId]['stock_minimo_actividad'] ?? null;
                    ?>
                    <?php if ($u['state'] === 'activo'): ?>
                        <div class="col-12 col-md-4">

                            <?= view('Partials/CardActivity', [
                                'activity' => $u,
                                'stockMinimo' => $stockMinimo,
                                'logueado' => false
                            ]) ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <!--------------------            Card de alojamientos ----------------------->

        <section class="acc-image d-flex align-items-center justify-content-center text-center text-white">
            <div class="container">
                <h2 class="display-3 fw-bold">Alojamientos</h1>
                    <p class="fg-danger">Tu experiencia en Buenos Aires comienza con el lugar donde te hospedás. Descubrí espacios para descansar, sentirte a gusto y disfrutar cada día de la ciudad.</p>
            </div>
        </section>

        <section class="container my-4">
            <div class="row g-4">
                <?php foreach ($accommodations as $u): ?>
                    <?php
                    $accommodationId = $u['id'];
                    $stockMinimo = $disponibilidadPorAlojamiento[$accommodationId]['stock_minimo_alojamiento'] ?? null;
                    ?>
                    <?php if ($u['state'] === 'activo'): ?>
                    <div class="col-12 col-md-4">
                        <?= view('Partials/CardAccommodations', [
                            'accommodation' => $u,
                            'stockMinimo' => $stockMinimo,
                            'logueado' => false
                        ]) ?>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

    </main>
    <?= $this->endSection() ?>

</body>

</html>