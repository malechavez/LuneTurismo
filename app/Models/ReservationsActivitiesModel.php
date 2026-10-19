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

    public function getReservationByUser($userId)
    {
        return $this->select('reservations_activities.*, activities.name AS activity_name')
                    ->join('activities', 'activities.id = reservations_activities.activity_id')
                    ->where('user_id', $userId)
                    ->findAll();
    }
}
