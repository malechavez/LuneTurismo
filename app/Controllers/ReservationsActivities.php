<?php
namespace App\Controllers;

use App\Models\ActivitiesModel;
use App\Models\ReservationsActivitiesModel;
use App\Models\ActivityAvailabilityModel;

class ReservationsActivities extends BaseController
{
    public function create($id)
    {
        $activitiesModel = new ActivitiesModel();

        $activity = $activitiesModel->getActivity($id);

        return view('Client/ReservationActivity', [
            'activity' => $activity
        ]);
    }

    public function store()
    {

        $userId = session()->get('userid');
        $activityId = (int) $this->request->getPost('activity_id');
        $fecha = $this->request->getPost('fecha_elegida');
        $cantidad = (int) $this->request->getPost('cantidad'); //Lo recibe como string 
        
        // Validar los datos

        $db = \Config\Database::connect();

        $activitiesModel = new ActivitiesModel();
        $activity = $activitiesModel->getActivity($activityId);

        $total = (float) $activity['price'] * $cantidad;

        $db->transBegin();

        // Descontar lugares si hay stock suficiente
        $availabilityModel = new ActivityAvailabilityModel();

        $availabilityModel->where('activity_id', $activityId)->where('fecha', $fecha)->where('stock >=', $cantidad)->set('stock', 'stock - ' . $cantidad, false)->update();

        // Comprobar si se modificó una fila
        if ($db->affectedRows() !== 1) {
            $db->transRollback();
            return redirect()->back()->withInput()->with('error', 'No hay suficientes lugares disponibles.');
        }

        // Guardar la reserva
        $reservationsModel = new ReservationsActivitiesModel();

        $reservationsModel->insert([
            'user_id'       => $userId,
            'activity_id'   => $activityId,
            'fecha_reserva' => date('Y-m-d H:i:s'),
            'fecha_elegida' => $fecha,
            'cantidad'      => $cantidad,
            'total'         => $total,
            'estado'        => 'Confirmada'
        ]);
        $db->transCommit();

        return redirect()->to('client/home')
            ->with('success', '¡Tu reserva se realizó correctamente!');
    }
}

