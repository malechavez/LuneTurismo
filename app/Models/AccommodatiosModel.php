<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\AccommodationAvailabilityModel;
use CodeIgniter\I18n\Time;
/* Modelo para gestionar los alojamientos */

class AccommodatiosModel extends Model
{
    protected $table = 'accommodations';
    protected $allowedFields = ['name', 'category', 'location', 'available_slots', 'people', 'price', 'description', 'image1', 'image2', 'image3'];

    //Retorna los alojamientos
    public function getAccommodations()
    {
        return $this->findAll();
    }

    //Retorna el alojamiento con el ID recibido
    public function getAccommodation($id)
    {
        return $this->where("id", $id)->first();
    }

    //crea un nuevo alojamiento
    public function saveAccommodation($name, $category, $location, $available_slots, $people, $price, $description, $image1, $image2, $image3)
    {
        $image1Name = null;
        $image2Name = null;
        $image3Name = null;

        if ($image1 && $image1->isValid()) {
            $image1Name = $image1->getRandomName();
            $image1->move(ROOTPATH . 'public/images/accommodations', $image1Name);
        }

        if ($image2 && $image2->isValid()) {
            $image2Name = $image2->getRandomName();
            $image2->move(ROOTPATH . 'public/images/accommodations', $image2Name);
        }

        if ($image3 && $image3->isValid()) {
            $image3Name = $image3->getRandomName();
            $image3->move(ROOTPATH . 'public/images/accommodations', $image3Name);
        }

        $this->save([
            'name' => $name,
            'category' => $category,
            'location' => $location,
            'available_slots' => $available_slots,
            'people' => $people,
            'price' => $price,
            'description' => $description,
            'image1' => $image1Name,
            'image2' => $image2Name,
            'image3' => $image3Name
        ]);


        $accommodationId = $this->getInsertID();
        $fecha = Time::now();

        //Gestion de la disponibilidad 
        $availabilityAccommodationModel = new AccommodationAvailabilityModel();

        $availabilityAccommodationModel->insert([
            'accommodation_id' => $accommodationId,
            'fecha' => $fecha->toDateString(),
            'total' => $available_slots,
            'stock' => $available_slots
        ]);
    }

    //modifica el alojamiento  
    public function updateAccommodation($id, $name, $category, $location, $available_slots, $people, $price, $description, $image1, $image2, $image3)
    {
        $accommodation = $this->find($id);

        $image1Name = $accommodation['image1'];
        $image2Name = $accommodation['image2'];
        $image3Name = $accommodation['image3'];

        if ($image1 && $image1->isValid()) {
            $image1Name = $image1->getRandomName();
            $image1->move(ROOTPATH . 'public/images/accommodations', $image1Name);
        }

        if ($image2 && $image2->isValid()) {
            $image2Name = $image2->getRandomName();
            $image2->move(ROOTPATH . 'public/images/accommodations', $image2Name);
        }

        if ($image3 && $image3->isValid()) {
            $image3Name = $image3->getRandomName();
            $image3->move(ROOTPATH . 'public/images/accommodations', $image3Name);
        }

        $this->update($id, [
            'name' => $name,
            'category' => $category,
            'location' => $location,
            'available_slots' => $available_slots,
            'people' => $people,
            'price' => $price,
            'description' => $description,
            'image1' => $image1Name,
            'image2' => $image2Name,
            'image3' => $image3Name
        ]);


        $availabilityAccommodationModel = new AccommodationAvailabilityModel();
        $disponibilidades = $availabilityAccommodationModel
            ->where('accommodation_id', $id)
            ->findAll();


        foreach ($disponibilidades as $disponibilidad) {
            
            if ($disponibilidad) {
               $ocupados = $disponibilidad['total'] - $disponibilidad['stock'];

                if ($available_slots < $ocupados) {
                    return redirect()->back()
                        ->withInput()
                        ->with('error', 'La cantidad de cupos no puede ser menor a los ya reservados.');
                }

                $nuevoStock = $available_slots - $ocupados;

                $availabilityAccommodationModel->update($disponibilidad['id'], [
                    'total' => $available_slots,
                    'stock' => $nuevoStock
                ]);
            } else {
                $availabilityAccommodationModel->insert([
                    'accommodation_id' => $id,
                    'fecha' => $disponibilidad['fecha'],
                    'total' => $available_slots,
                    'stock' => $available_slots
                ]);
            }
        }
    }

    //elimina 
    public function deleteAccommodation($id)
    {
        $this->delete($id);
    }
}
