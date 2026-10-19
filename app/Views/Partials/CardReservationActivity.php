<div class="card reservation-card my-3">
    <div class="card-body">

        <p class="reservation-info">
            <span class="reservation-value">
                <?= esc($reservationActivity['activity_name']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Fecha de la reserva:</span>
            <span class="reservation-value">
                <?= esc($reservationActivity['fecha_reserva']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Fecha de la actividad:</span>
            <span class="reservation-value">
                <?= esc($reservationActivity['fecha_elegida']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Cantidad de personas:</span>
            <span class="reservation-value">
                <?= esc($reservationActivity['cantidad']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Total:</span>
            <span class="reservation-value">
                $<?= esc($reservationActivity['total']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Estado:</span>
            <span class="reservation-value">
                <?= esc($reservationActivity['estado']) ?>
            </span>
        </p>

    </div>
</div>