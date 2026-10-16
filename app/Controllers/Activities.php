<?php
namespace App\Controllers;
use App\Models\ActivitiesModel;

class Activities extends BaseController 
{
    protected $activitiesModel;

    public function __construct()
    {
        $this->activitiesModel = new ActivitiesModel();
    }

    //Muestra el listado de actividades
    public function index()
    {
        $data['activities'] = $this->activitiesModel->getActivities(); 
        return view('Admin/Activities/Index', $data);
    }

    //Form de crear
    public function create()
    {
        return view('Admin/Activities/Create'); //muestra form de creacion
    }

    //Form de editar 
    public function edit($id)
    {
        $data['activity'] = $this->activitiesModel->getActivity($id);
        return view('Admin/Activities/Edit', $data);
    }

    public function store()
    {
        $name = $this->request->getPost('name'); 
        $category = $this->request->getPost('category');
        $location = $this->request->getPost('location');
        $available_slots = $this->request->getPost('available_slots');
        $price = $this->request->getPost('price');
        $start_date = $this->request->getPost('start_date');
        $end_date = $this->request->getPost('end_date');
        $description = $this->request->getPost('description');
        $image1 = $this->request->getFile('image1');
        $image2 = $this->request->getFile('image2');
        $image3 = $this->request->getFile('image3');

        $this->activitiesModel->saveActivity($name, $category, $location, $available_slots, $price, $start_date, $end_date, $description, $image1, $image2, $image3);

        return redirect()->to('/admin');
    }

    //procesa form de edicion y actualiza
    public function update($id)
    {
        $newName = $this->request->getPost('name');
        $newCategory = $this->request->getPost('category');
        $newLocation = $this->request->getPost('location');
        $newAvailable_slots = $this->request->getPost('available_slots');
        $newPrice = $this->request->getPost('price');
        $newStart_date = $this->request->getPost('start_date');
        $newEnd_date = $this->request->getPost('end_date');
        $newDescription = $this->request->getPost('description');
        $newImage1 = $this->request->getFile('image1');
        $newImage2 = $this->request->getFile('image2');
        $newImage3 = $this->request->getFile('image3');

        $this->activitiesModel->updateActivity($id, $newName, $newCategory, $newLocation, $newAvailable_slots, $newPrice, $newStart_date, $newEnd_date, $newDescription, $newImage1, $newImage2, $newImage3);

        return redirect()->to('/admin');
    }

    public function confirmDelete($id)
    {
        $data['activity'] = $this->activitiesModel->getActivity($id);
        return view('Admin/Activities/Delete', $data);
    }
    
    public function delete($id)
    {
        $this->activitiesModel->deleteActivity($id);

        return redirect()->to('/admin');
    
    }

    public function detail($id)
    {
        $data['activity'] = $this->activitiesModel->getActivity($id);

        if (!$data['activity']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Client/ActivityDetail', $data);
    }
}   