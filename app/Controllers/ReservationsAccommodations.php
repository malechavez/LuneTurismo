<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;
use App\Models\AccommodatiosModel;
use App\Models\AccommodationAvailabilityModel;
use App\Models\ReservationsAccommodationsModel;

class ReservationsAccommodations extends BaseController
{

    protected $reservationsAccommodationsModel;

    public function create($id)
    {
        $accommodationsModel = new AccommodatiosModel();

        $accommodation = $accommodationsModel->getAccommodation($id);

        $fechaActual = Time::now();  //Obtiene la fecha actual 
        $maxDate = $fechaActual->addDays(365);
        return view(
            'Client/ReservationAccommodation',
            [
                'accommodation' => $accommodation,
                'minDate' => $fechaActual->toDateString(),
                'maxDate' => $maxDate->toDateString()
            ]
        );

    }

    public function store()
    {

        $fechaActual = Time::now();
        $userId = session()->get('userid');
        $accommodationId = (int) $this->request->getPost('accommodation_id');
        $fechaCheckin = $this->request->getPost('fecha_elegida');
        $fechaCheckout = $this->request->getPost('fecha_checkout');
        $cantidad = (int) $this->request->getPost('cantidad');

        //Pasar las fechas a objetos Time para poder compararlas
        $fechaCheckinComp = Time::parse($fechaCheckin);
        $fechaCheckoutComp = Time::parse($fechaCheckout);

        if ($fechaCheckoutComp <= $fechaCheckinComp) { // Verifica que la fecha de checkout sea mayor a la fecha de checkin
            return redirect()->back()->withInput()->with('error', 'La fecha de salida debe ser posterior a la entrada.');
        }

        $diferencia = $fechaCheckinComp->difference($fechaCheckoutComp); //Obtiene la diferencia de días entre la fecha de checkin y checkout
        $noches  = $diferencia->days; // Obtiene el numero total de noches


        $db = \Config\Database::connect();

        $accommodationsModel = new AccommodatiosModel();
        $accommodation = $accommodationsModel->getAccommodation($accommodationId);

        if ($cantidad > $accommodation['people']) {
            return redirect()->back()->withInput()->with('error', 'La cantidad de personas supera la capacidad máxima del alojamiento.');
        }
        
        $total = (float) $accommodation['price'] * $noches;

        $db->transBegin();

        $accommodationAvailabilityModel = new AccommodationAvailabilityModel();


        $fecha = $fechaCheckin;

        for ($i = 0; $i < $noches; $i++) {
            $accommodationAvailabilityModel->resetQuery();
            $accommodationAvailabilityModel->where('accommodation_id', $accommodationId)->where('fecha', $fecha)->where('stock >=', 1)->set('stock', 'stock - 1', false)->update();

            if ($db->affectedRows() !== 1) {
                $db->transRollback();
                return redirect()->back()->withInput()->with('error', 'No hay disponibilidad para todas las noches seleccionadas.');
            }

            $fecha = Time::parse($fecha)->addDays(1)->toDateString();
        }

        $reservationsAccommodationsModel = new ReservationsAccommodationsModel();

        $reservationsAccommodationsModel->insert([
            'user_id' => $userId,
            'accommodation_id' => $accommodationId,
            'fecha_checkin' => $fechaCheckin,
            'fecha_checkout' => $fechaCheckout,
            'cantidad_unidades' => 1,
            'cantidad_personas' => $cantidad,
            'total' => $total,
            'estado' => 'Confirmada',
            'fecha_reserva' => date('Y-m-d H:i:s')
        ]);

        $db->transCommit();

        return redirect()->to('client/home')
            ->with('success', '¡Tu reserva se realizó correctamente!');
    }
}
