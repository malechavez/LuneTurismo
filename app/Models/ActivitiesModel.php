<?php 
namespace App\Models;
use CodeIgniter\Model;
use App\Models\ActivityAvailabilityModel;
/* Modelo para gestionar las actividades */
class ActivitiesModel extends Model 
{
    protected $table = 'activities'; //la base de datos
    
    protected $allowedFields = ['name', 'category', 'location', 'available_slots', 'price', 'start_date', 'end_date', 'description', 'image1', 'image2', 'image3', 'state'];

    //Retorna las actividades almacenadas
    public function getActivities()
    {
        return $this->select(
        'activities.*,
        (SELECT COALESCE(SUM(aa.stock), 0)
        FROM activities_availability aa
        WHERE aa.activity_id = activities.id) AS total_stock',
        false
        )->findAll();
    }

    //Retorna la actividad con el ID recibido por parametro
    public function getActivity($id)
    {
        return $this->where("id", $id)->first();
    }

    //Crea nueva actividad
    public function saveActivity($name, $category, $location,  $available_slots, $price, $start_date, $end_date, $description, $image1, $image2, $image3){
        $image1Name = null;
        $image2Name = null;
        $image3Name = null;

        if($image1 && $image1->isValid()){
            $image1Name = $image1->getRandomName();
            $image1->move(ROOTPATH . 'public/images/activities', $image1Name);
        }

        if($image2 && $image2->isValid()){
            $image2Name = $image2->getRandomName();
            $image2->move(ROOTPATH . 'public/images/activities', $image2Name);
        }

        if($image3 && $image3->isValid()){
            $image3Name = $image3->getRandomName();
            $image3->move(ROOTPATH . 'public/images/activities', $image3Name);
        }

        // Guarda la actividad y obtiene el ID generado
        $this->insert([
            'name' => $name,
            'category' => $category,
            'location' => $location,
            'available_slots' => $available_slots,
            'price' => $price,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'description' => $description,
            'image1' => $image1Name,
            'image2' => $image2Name,
            'image3' => $image3Name,
            'state' => 'activo'
        ]);

        $activityId = $this->getInsertID();

        // Modelo para gestionar la disponibilidad
        $availabilityModel = new ActivityAvailabilityModel();

        // Recorre todas las fechas de la actividad
        $fechaInicio = new \DateTime($start_date);
        $fechaFin = new \DateTime($end_date);
        $fechaFin->modify('+1 day');

        $periodo = new \DatePeriod(
            $fechaInicio,
            new \DateInterval('P1D'),
            $fechaFin
        );

        // Crea un registro por cada día
        foreach ($periodo as $fecha) {
            $availabilityModel->insert([
                'activity_id' => $activityId,
                'fecha' => $fecha->format('Y-m-d'),
                'total' => $available_slots,
                'stock' => $available_slots
            ]);
        }   
    }

    //modifica la actividad
    public function updateActivity($id, $name, $category, $location, $available_slots, $price, $start_date, $end_date, $description, $image1, $image2, $image3)
    {
        $activity = $this->find($id);

        $image1Name = $activity['image1'];
        $image2Name = $activity['image2'];
        $image3Name = $activity['image3'];

        if ($image1 && $image1->isValid()) {
            $image1Name = $image1->getRandomName();
            $image1->move(ROOTPATH . 'public/images/activities', $image1Name);
        }

        if ($image2 && $image2->isValid()) {
            $image2Name = $image2->getRandomName();
            $image2->move(ROOTPATH . 'public/images/activities', $image2Name);
        }

        if ($image3 && $image3->isValid()) {
            $image3Name = $image3->getRandomName();
            $image3->move(ROOTPATH . 'public/images/activities', $image3Name);
        }

        $this->update($id, [
            'name' => $name,
            'category' => $category,
            'location' => $location,
            'available_slots' => $available_slots,
            'price' => $price,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'description' => $description,
            'image1' => $image1Name,
            'image2' => $image2Name,
            'image3' => $image3Name
        ]);

        $availabilityModel = new ActivityAvailabilityModel();

        //busca las disponibilidades existentes
        $disponibilidades = $availabilityModel
            ->where('activity_id', $id)
            ->findAll();

        //guarda las disponibilidades existentes usando la fecha como clave
        $fechasExistentes = [];

        foreach ($disponibilidades as $disponibilidad) {
            $fechasExistentes[$disponibilidad['fecha']] = $disponibilidad;
        }

        //recorre todas las fechas del nuevo período
        $fechaInicio = new \DateTime($start_date);
        $fechaFin = new \DateTime($end_date);
        $fechaFin->modify('+1 day'); //se pone un dia más porque el period no contempla el ultimo

        $periodo = new \DatePeriod(
            $fechaInicio,
            new \DateInterval('P1D'),
            $fechaFin
        );

        foreach ($periodo as $fecha) {
            $fechaActual = $fecha->format('Y-m-d');

            //si la fecha ya existe, actualiza sus cupos
            if (isset($fechasExistentes[$fechaActual])) {
                $disponibilidad = $fechasExistentes[$fechaActual];
                //calcula los cupos que ya estaban ocupados
                $ocupados = $disponibilidad['total'] - $disponibilidad['stock'];
                //actualiza el total y conserva los cupos ocupados
                $nuevoStock = max(0, $available_slots - $ocupados);
                $availabilityModel->update($disponibilidad['id'], [
                    'total' => $available_slots,
                    'stock' => $nuevoStock
                ]);
            } else {
                //si la fecha no existe, crea una disponibilidad nueva
                $availabilityModel->insert([
                    'activity_id' => $id,
                    'fecha' => $fechaActual,
                    'total' => $available_slots,
                    'stock' => $available_slots
                ]);
            }
        }
    }


    //funcion para deshabilitar una actividad
    public function deleteActivity($id)
    {
        $this->update($id, ['state' => 'inactivo']);
    }

    //funcion para habilitar una actividad
    public function activateActivity($id)
    {
        $this->update($id, ['state' => 'activo']);
    }
}