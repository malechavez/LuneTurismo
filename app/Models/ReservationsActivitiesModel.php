<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservationsActivitiesModel extends Model
{
    protected $table = 'reservations_activities';

    protected $allowedFields = [
        'user_id',
        'activity_id',
        'fecha_reserva',
        'fecha_elegida',
        'cantidad',
        'total',
        'estado'
    ];

    
}
