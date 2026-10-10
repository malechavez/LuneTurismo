<?php 
namespace App\Models;
use CodeIgniter\Model;
/* Modelo para gestionar las actividades */
class ActivitiesModel extends Model 
{
    protected $table = 'activities'; //la base de datos
    
    protected $allowedFields = ['name', 'category', 'location', 'available_slots', 'price', 'start_date', 'end_date', 'description', 'image1', 'image2', 'image3'];

    //Retorna las actividades almacenadas
    public function getActivities()
    {
        return $this->findAll();
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

        $this->save([
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
    }

    //modifica la actividad
    public function updateActivity($id, $name, $category, $location,  $available_slots, $price, $start_date, $end_date,  $description, $image1, $image2, $image3)
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
    }

    //funcion para eliminar una actividad
    public function deleteActivity($id)
    {
        $this->delete($id);
    }
}