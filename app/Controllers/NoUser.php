<?php

namespace App\Controllers;
use App\Models\AccommodatiosModel;
use App\Models\ActivitiesModel;
use App\Models\ActivityAvailabilityModel;
use App\Models\AccommodationAvailabilityModel;

class NoUser extends BaseController
{

    protected $accommodationsModel;
    protected $activitiesModel;
    protected $activityAvailabilityModel;
    protected $accommodationAvailabilityModel;

    public function __construct()
    {
        $this->accommodationsModel = new AccommodatiosModel();
        $this->activitiesModel = new ActivitiesModel();
        $this->activityAvailabilityModel = new ActivityAvailabilityModel();
        $this->accommodationAvailabilityModel = new AccommodationAvailabilityModel();
    }


    //Devuele los datos para mostrar las actividades y alojamientos en la vista de inicio del cliente
    public function index()
    {
        $data['activities'] = $this->activitiesModel->getActivities();
        $data['accommodations'] = $this->accommodationsModel->getAccommodations();


        $activityAvailability = $this->activityAvailabilityModel->getActivityAvailability(); //Obtiene el contenido de la tabla activities_availability
        $accommodationAvailability = $this->accommodationAvailabilityModel->getAccommodationAvailability(); //Obtiene el contenido de la tabla accommodations_availability

        $disponibilidadPorActividad = [];
        $disponibilidadPorAlojamiento = [];

        //Recorre la disponibilidad de actividades para obtener el stock mínimo por actividad 
        foreach ($activityAvailability as $disponibilidad) {
            $activityId = $disponibilidad['activity_id'];

            if (!isset($disponibilidadPorActividad[$activityId])) {
                $disponibilidadPorActividad[$activityId] = [
                    'stock_minimo_actividad' => (int) $disponibilidad['stock']
                ];
            } else {
                $disponibilidadPorActividad[$activityId]['stock_minimo_actividad'] = min(
                    $disponibilidadPorActividad[$activityId]['stock_minimo_actividad'],
                    (int) $disponibilidad['stock']
                );
            }
        }


        //Recorre la disponibilidad de alojamientos para obtener el stock mínimo por alojamiento
        foreach ($accommodationAvailability as $disponibilidad) {
            $accommodationId = $disponibilidad['accommodation_id'];
            $stock = (int) $disponibilidad['stock'];

            if ($disponibilidad['fecha'] >= date('Y-m-d') && $stock > 0) {
                if (!isset($disponibilidadPorAlojamiento[$accommodationId])) {
                    $disponibilidadPorAlojamiento[$accommodationId] = [
                        'stock_minimo_alojamiento' => $stock
                    ];
                } else {
                    $disponibilidadPorAlojamiento[$accommodationId]['stock_minimo_alojamiento'] = min(
                        $disponibilidadPorAlojamiento[$accommodationId]['stock_minimo_alojamiento'],
                        $stock
                    );
                }
            }
        }

        $data['disponibilidadPorActividad'] = $disponibilidadPorActividad;
        $data['disponibilidadPorAlojamiento'] = $disponibilidadPorAlojamiento;
        return view('NoUser/inicioNoUser', $data);
    }
}