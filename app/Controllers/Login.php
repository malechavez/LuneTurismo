<?php
namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController{

    protected $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }

    public function index(){
        return view('Auth/Login');
    }

    //Comprueba si los datos del usuario son correctos y crea una sesion
    public function login(){

        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput()->with('errors', $this->validator->listErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->userModel->validateUser($email, $password);

        if($user !== null){
            $this->setSession($user);
            if($user['role_id'] == 1){
                return redirect()->to('/client'); // Usuario común
            } else if($user['role_id'] == 2){
                return redirect()->to('/admin'); // Administrador
            }
        }

        return redirect()->back()->withInput()->with('errors', 'Usuario y/o contraseña incorrectos');
    }

    // Crea una sesion con los datos del usuario que inicio sesion
    private function setSession($userData){
        $data = [
            'logged_in' => true,
            'userid' => $userData['id'],
            'usermail' => $userData['email'],
            'role_id' => $userData['role_id']
        ];

        $this->session->set($data);
    } 
    //Cierra sesion
    public function logout(){
        //Si la sesion existe, la destruye
        if($this->session->get('logged_in')){
            $this->session->destroy();
        }

        return redirect()->to('/auth');
    }
}