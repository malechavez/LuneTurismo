<?php

namespace App\Controllers;
use App\Models\AccommodatiosModel;
use App\Models\ActivitiesModel;

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
}