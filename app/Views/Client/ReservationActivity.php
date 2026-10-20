
<?= $this->extend('Layouts/LayoutUser') ?>
<?= $this->section('content') ?>

<main class="container my-5">

    <a href="<?= site_url('client/activityDetail/' . $activity['id']) ?>"
        class="btn btn-outline-secondary mb-4">
        ← Volver al detalle
    </a>

    <div class="card mx-auto shadow" style="max-width: 600px;">
        <div class="card-body p-4">
            <h1 class="mb-3">Reservar actividad</h1>
            <h4><?= esc($activity['name']) ?></h4>
            <p><?= esc($activity['description']) ?></p>
            <p>
                <strong>Precio por persona:</strong>
                $<?= esc($activity['price']) ?>
            </p>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="<?= site_url('client/reservations/activities/store') ?>"method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="activity_id" value="<?= esc($activity['id']) ?>">
                <div class="mb-3">
                    <label for="fecha_elegida" class="form-label">
                        Fecha de la actividad
                    </label>
                    <input type="date" id="fecha_elegida" name="fecha_elegida" class="form-control" min="<?= esc($activity['start_date']) ?>" max="<?= esc($activity['end_date']) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">
                        Cantidad de personas
                    </label>
                    <input type="number" id="cantidad" name="cantidad" class="form-control" min="1" value="1" required>
                </div>
                <button type="submit" class="btn">
                    Confirmar reserva
                </button>
            </form>
        </div>
    </div>

</main>

<?= $this->endSection() ?>
