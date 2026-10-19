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

    public function getReservationByUser($userId)
    {
        return $this->select('reservations_accommodations.*, accommodations.name AS accommodation_name')
                    ->join('accommodations', 'accommodations.id = reservations_accommodations.accommodation_id')
                    ->where('user_id', $userId)
                    ->findAll();
    }

}