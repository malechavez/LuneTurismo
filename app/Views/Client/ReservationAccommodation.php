<?= $this->extend('Layouts/LayoutUser') ?>
<?= $this->section('content') ?>

<main class="container my-5">

    <a href="<?= site_url('client/accommodationDetail/' . $accommodation['id']) ?>"
        class="btn btn-outline-secondary mb-4">
        ← Volver al detalle
    </a>

    <div class="card mx-auto shadow" style="max-width: 600px;">
        <div class="card-body p-4">
            <h1 class="mb-3">Reservar Alojamiento</h1>
            <h4><?= esc($accommodation['name']) ?></h4>
            <p><?= esc($accommodation['description']) ?></p>
            <p>
                <strong>Cantidad maxima de personas:</strong>
                <?= esc($accommodation['people']) ?>
            </p>
            <p>
                <strong>Precio por noche:</strong>
                $<?= esc($accommodation['price']) ?>
            </p>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>
            <form action="<?= site_url('client/reservations/accommodatios/store') ?>"method="post">
                <?= csrf_field() ?>
                <input type="hidden" name="accommodation_id" value="<?= esc($accommodation['id']) ?>">
                <div class="mb-3">
                    <label for="fecha_elegida" class="form-label">
                        Fecha de la reserva (Check-in)
                    </label>
                    <input type="date" id="fecha_elegida" name="fecha_elegida" class="form-control" min="<?= esc($minDate) ?>" max="<?=esc($maxDate) ?>" required>
                </div>
                <div class="mb-3">
                    <label for="fecha_checkout" class="form-label">
                        Fecha final de estadia (Check-out)
                    </label>
                    <input type="date" id="fecha_checkout" name="fecha_checkout" class="form-control" min="<?= esc($minDate) ?>" max="<?=esc($maxDate) ?>" required>
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

