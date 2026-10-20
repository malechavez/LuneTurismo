<div class="card mx-3 my-2">
    <img
        src="<?= base_url('images/accommodations/' . esc($accommodation['image1'])) ?>"
        class="accommodation-img"
        alt="<?= esc($accommodation['name']) ?>">
    <div class="card-body">
        <h4 class="card-title"><?= esc($accommodation['name']) ?></h4>
        <!-- Cartel de aviso de cupos  -->
        <?php if ($stockMinimo <= 5 && $stockMinimo > 0): ?>
            <div class="bg-warning rounded-3 border border-black border-2" style="width: 45%;">
                <div class="p-1">
                    <small class="fw-medium">Pocos cupos disponibles</small>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($stockMinimo == 0): ?>
            <div class="bg-danger rounded-3 border border-black border-2" style="width: 45%;">
                <div class="p-1">
                    <small class="fw-medium">Sin cupos disponibles para algunos dias</small>
                </div>
            </div>
        <?php endif; ?>
        <small class="fg-3">
            <?= esc($accommodation['category']) ?>
        </small>
        <div class="d-flex justify-content-between width-100 flex-row-reverse">
            <span class="fw-bold">
                Precio: $<?= esc($accommodation['price']) ?>
            </span>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-end">
        <?php if ($logueado): ?>
            <a class="btn" href="<?= site_url('client/accommodationDetail/' . $accommodation['id']) ?>">
                Ver más detalle
            </a>
        <?php else: ?>
            <a class="btn" href="<?= site_url('auth') ?>">
                Ver más detalle
            </a>
        <?php endif; ?>
    </div>
</div>
