<?= $this->extend('Layouts/LayoutUser') ?>
    <?= $this->section('content') ?>
    <section class="flex-grow-1">
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
                    <div class="col-12 col-md-4">
                        <?= view('Partials/CardActivity', [
                            'activity' => $u,
                            'logueado' => true
                        ]) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </section>
    <?= $this->endSection() ?>
