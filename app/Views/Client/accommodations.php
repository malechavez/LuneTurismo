<?= $this->extend('Layouts/LayoutUser') ?>
    <?= $this->section('content') ?>
    <section class="flex-grow-1">
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
                        'logueado' => true
                    ]) ?>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

    </section>
    <?= $this->endSection() ?>
