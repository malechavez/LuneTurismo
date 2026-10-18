<?php

namespace App\Models;
use CodeIgniter\Model;

class AccommodationAvailabilityModel extends Model{

    protected $table = 'accommodations_availability'; // Tabla accommodations_availability
    protected $allowedFields = [
        'accommodation_id', 
        'fecha',
        'total',
        'stock'
        ]; 
}