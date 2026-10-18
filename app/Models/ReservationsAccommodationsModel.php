<?php

namespace App\Models;
use CodeIgniter\Model;

class ReservationsAccommodationsModel extends Model{

    protected $table = 'reservations_accommodations'; // Tabla reservations_accommodations
    protected $allowedFields = [
        'user_id', 
        'accommodation_id', 
        'fecha_checkin', 
        'fecha_elegida', 
        'fecha_checkout',
        'cantidad_unidades',
        'cantidad_personas', 
        'total', 
        'estado',
        'fecha_reserva'
        ]; // Campos de la tabla

}

