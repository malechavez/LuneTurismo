<div class="card reservation-card my-3">
    <div class="card-body">

        <p class="reservation-info">
            <span class="reservation-value">
                <?= esc($reservationAccommodation['accommodation_name']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Fecha de la reserva:</span>
            <span class="reservation-value">
                <?= esc($reservationAccommodation['fecha_reserva']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Fecha de la check-in:</span>
            <span class="reservation-value">
                <?= esc($reservationAccommodation['fecha_checkin']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Fecha de la check-out:</span>
            <span class="reservation-value">
                <?= esc($reservationAccommodation['fecha_checkout']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Cantidad de personas:</span>
            <span class="reservation-value">
                <?= esc($reservationAccommodation['cantidad_personas']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Total:</span>
            <span class="reservation-value">
                $<?= esc($reservationAccommodation['total']) ?>
            </span>
        </p>

        <p class="reservation-info">
            <span class="reservation-label">Estado:</span>
            <span class="reservation-value">
                <?= esc($reservationAccommodation['estado']) ?>
            </span>
        </p>

    </div>
</div>