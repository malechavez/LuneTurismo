<?php 
namespace App\Controllers;
use App\Models\AccommodatiosModel;

class Accommodations extends BaseController
{
    protected $accommodationsModel;

    public function __construct()
    {
        $this->accommodationsModel = new AccommodatiosModel();
    }

    //Muestra listado de alojamientos
    public function index()
    {
        $data['accommodations'] = $this->accommodationsModel->getAccommodations();
        return view('Admin/Accommodations/Index', $data);
    }

    //Form crear 
    public function create()
    {
        return view('Admin/Accommodations/Create');
    }

    //Form editar
    public function edit($id)
    {
        $data['accommodation'] = $this->accommodationsModel->getAccommodation($id);
        return view('Admin/Accommodations/Edit', $data);
    }

    //guarda
    public function store()
    {
        $name = $this->request->getPost('name'); 
        $category = $this->request->getPost('category');
        $location = $this->request->getPost('location');
        $available_slots = $this->request->getPost('available_slots');
        $people = $this->request->getPost('people');
        $price = $this->request->getPost('price');
        $description = $this->request->getPost('description');
        $image1 = $this->request->getFile('image1');
        $image2 = $this->request->getFile('image2');
        $image3 = $this->request->getFile('image3');

        $this->accommodationsModel->saveAccommodation($name, $category, $location, $available_slots, $people, $price, $description, $image1, $image2, $image3);

        return redirect()->to('/admin');
    }

    //actualiza
    public function update($id){
        $newName = $this->request->getPost('name');
        $newCategory = $this->request->getPost('category');
        $newLocation = $this->request->getPost('location');
        $newAvailable_slots = $this->request->getPost('available_slots');
        $newPeople = $this->request->getPost('people');
        $newPrice = $this->request->getPost('price');
        $newDescription = $this->request->getPost('description');
        $newImage1 = $this->request->getFile('image1');
        $newImage2 = $this->request->getFile('image2');
        $newImage3 = $this->request->getFile('image3');

        $this->accommodationsModel->updateAccommodation($id, $newName, $newCategory, $newLocation, $newAvailable_slots, $newPeople, $newPrice, $newDescription, $newImage1, $newImage2, $newImage3);
        return redirect()->to('/admin');

    }

    public function confirmDelete($id)
    {
        $data['accommodation'] = $this->accommodationsModel->getAccommodation($id);
        return view('Admin/Accommodations/Delete', $data);
    }

    public function delete($id)
    {
        $this->accommodationsModel->deleteAccommodation($id);
        return redirect()->to('/admin');
    }

    public function detail($id)
    {
        $data['accommodation'] = $this->accommodationsModel->getAccommodation($id);

        if (!$data['accommodation']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Client/AccommodationDetail', $data);
    }
}