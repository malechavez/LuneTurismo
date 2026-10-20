
<?= $this->extend('Layouts/LayoutUser') ?>
<?= $this->section('content') ?>

<main class="flex-grow-1 container my-5">

    <a href="<?= site_url('client/home') ?>" class="btn btn-outline-secondary mb-4">
        ← Volver a actividades
    </a>

    <div class="card mx-auto shadow" style="max-width: 900px;">

        <img
            src="<?= base_url('images/activities/' . esc($activity['image1'])) ?>"
            class="card-img-top"
            alt="<?= esc($activity['name']) ?>"
            style="max-height: 450px; object-fit: cover;"
        >

        <div class="card-body p-4">

            <h1 class="card-title mb-3">
                <?= esc($activity['name']) ?>
            </h1>

            <p class="text-muted">
                Categoría: <?= esc($activity['category']) ?>
            </p>

            <p>
                <?= esc($activity['description']) ?>
            </p>

            <hr>

            <p>
                <strong>Ubicación:</strong>
                <?= esc($activity['location']) ?>
            </p>

            <p>
                <strong>Fecha de inicio:</strong>
                <?= esc($activity['start_date']) ?>
            </p>

            <p>
                <strong>Fecha de finalización:</strong>
                <?= esc($activity['end_date']) ?>
            </p>

            <p class="fs-4 fw-bold">
                Precio: $<?= esc($activity['price']) ?>
            </p>

            <div class="text-end mt-4">
                <a
                    href="<?= site_url('client/reservations/activities/' . $activity['id']) ?>"
                    class="btn btn-primary"
                >
                    Reservar
                </a>
            </div>

        </div>
    </div>

</main>

<?= $this->endSection() ?>
