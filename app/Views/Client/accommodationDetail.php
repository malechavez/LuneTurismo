
<?= $this->extend('Layouts/LayoutUser') ?>
<?= $this->section('content') ?>

<main class="flex-grow-1 container my-5">

    <a href="<?= site_url('client') ?>" class="btn btn-outline-secondary mb-4">
        ← Volver a alojamientos
    </a>

    <div class="card mx-auto shadow" style="max-width: 900px;">

        <img
            src="<?= base_url('images/accommodations/' . esc($accommodation['image1'])) ?>"
            class="card-img-top"
            alt="<?= esc($accommodation['name']) ?>"
            style="max-height: 450px; object-fit: cover;"
        >

        <div class="card-body p-4">

            <h1 class="card-title mb-3">
                <?= esc($accommodation['name']) ?>
            </h1>

            <p class="text-muted">
                Categoría: <?= esc($accommodation['category']) ?>
            </p>

            <p>
                <?= esc($accommodation['description']) ?>
            </p>

            <hr>

            <p>
                <strong>Ubicación:</strong>
                <?= esc($accommodation['location']) ?>
            </p>

            <p class="fs-4 fw-bold">
                Precio: $<?= esc($accommodation['price']) ?>/noche
            </p>

            <div class="text-end mt-4">
                <a
                    href="<?= site_url('reservations/accommodatios/' . $accommodation['id']) ?>"
                    class="btn btn-primary"
                >
                    Reservar
                </a>
            </div>

        </div>
    </div>

</main>

<?= $this->endSection() ?>
