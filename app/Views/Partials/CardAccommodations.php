<div class="card mx-3 my-2">
    <img src="<?= base_url('images/accommodations/' . esc($accommodation['image1']) ) ?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h4 class="card-title"><?= esc($accommodation['name']) ?></h4>

        <!-- Cartel de aviso de cupos  -->
        <!--<div class="bg-warning" style="width: 25%;">
            Pocos cupos disponibles
        </div>-->

        <p class="card-text"><?= esc($accommodation['description']) ?></p>
        <small class="fg-3">Categoría: <?= esc($accommodation['category']) ?></small>
        <div class="d-flex flex-row flex-row-reverse justify-content-between width-100 ">
            <span class="fw-bold">Precio: $<?= esc($accommodation['price']) ?></span>
        </div>
    </div>
    <div class="card-footer d-flex flex-row-reverse">
        <a href="#">Reservar</a>
    </div>
</div>