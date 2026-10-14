<?php
namespace App\Models;

use CodeIgniter\Model;

class ActivityAvailabilityModel extends Model
{
    protected $table = 'activities_availability';

    protected $allowedFields = [
        'activity_id',
        'fecha',
        'total', //total es el total de cupos por dia
        'stock' //cupos que quedan disponibles por dia
    ];


}
