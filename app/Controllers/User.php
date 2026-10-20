<?php
namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController{

    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function index(){
        return view('Auth/Register');
    }

    // Crea un nuevo usuario
    public  function storeUser(){
        
        $rules = [
            'name' => 'required|min_length[3]',
            'surname' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]|max_length[50]',
            'confirmpassword' => 'matches[password]',    
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $rolId = 1;
        $name = $this->request->getPost('name');
        $surname = $this->request->getPost('surname');
        $email = $this->request->getPost('email');

        /* password_hash convierte la contraseña a formato hash para que no aparezca como tal en la base de datos por seguridad */
        $password = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT); 

        $this->userModel->saveUser($rolId, $name, $surname, $email, $password);
        
        return redirect()->to('/auth');
    }

    public function list(){
        $data['users'] = $this->userModel->getUsers();

        return view('Admin/Users', $data);
    }
}