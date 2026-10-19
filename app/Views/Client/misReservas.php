<?= $this->extend('Layouts/LayoutUser') ?>
<?= $this->section('content') ?>

<section class="container my-5">
    <h1 class="mb-4">Mis reservas</h1>

    <section class="mb-5">
        <h2 class="mb-3">Mis reservas de actividades</h2>

        <div class="row g-4">
            <?php foreach ($activities as $u): ?>
                <div class="col-12 col-md-4">
                    <?= view('Partials/CardReservationActivity', [
                        'reservationActivity' => $u
                    ]) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="mb-5">
        <h2 class="mb-3">Mis reservas de alojamientos</h2>

        <div class="row g-4">
            <?php foreach ($accommodations as $u): ?>
                <div class="col-12 col-md-4">
                    <?= view('Partials/CardReservationAccommodation', [
                        'reservationAccommodation' => $u
                    ]) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</section>

<?= $this->endSection() ?>