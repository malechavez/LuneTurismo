<?php

namespace App\Controllers;
use App\Models\AccommodatiosModel;
use App\Models\ActivitiesModel;
use App\Models\ReservationsActivitiesModel;
use App\Models\ReservationsAccommodationsModel;

class Client extends BaseController
{

    protected $accommodationsModel;
    protected $activitiesModel;

    public function __construct()
    {
        $this->accommodationsModel = new AccommodatiosModel();
        $this->activitiesModel = new ActivitiesModel();
    }


    //Devuele los datos para mostrar las actividades y alojamientos en la vista de inicio del cliente
    public function index()
    {
        $data['activities'] = $this->activitiesModel->getActivities();
        $data['accommodations'] = $this->accommodationsModel->getAccommodations();

        return view('Client/inicio', $data);
    }

    public function activities(){
        $data['activities'] = $this->activitiesModel->getActivities();

        return view('Client/activities', $data);
    }
    
    public function accommodations(){
        $data['accommodations'] = $this->accommodationsModel->getAccommodations();

        return view('Client/accommodations', $data);
    }
    
    public function myReservations(){
        $userId = session()->get('userid');
        $reservationsActivitiesModel = new ReservationsActivitiesModel();
        $reservationsAccommodationsModel = new ReservationsAccommodationsModel();
        $myActivities = $reservationsActivitiesModel->getReservationByUser($userId);
        $myAccommodations = $reservationsAccommodationsModel->getReservationByUser($userId);
        return view('Client/MisReservas', ['activities' => $myActivities, 'accommodations' => $myAccommodations]);
    }
}