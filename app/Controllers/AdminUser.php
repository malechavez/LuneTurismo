<?php
namespace App\Controllers;

use App\Models\UserModel;

class AdminUser extends BaseController {

    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function index(){
        return view('Admin/CreateAdmin');
    }

    // Crea un nuevo administrador
    public function storeUser(){

        $rules = [
            'name' => 'required|min_length[3]',
            'surname' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'required|matches[password]',
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $rolId = 2; // Administrador

        $name = $this->request->getPost('name');
        $surname = $this->request->getPost('surname');
        $email = $this->request->getPost('email');

        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);

        $this->userModel->saveUser($rolId, $name, $surname, $email, $password);

        return redirect()->to('admin/home');
    }
}