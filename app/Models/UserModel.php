<?php

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'users'; // Tabla users
    protected $allowedFields = ['role_id', 'name', 'surname', 'email', 'password', 'create_at', 'update_at']; // Campos de la tabla
    protected $useTimestamps = true; // Habilita el formato de fecha y horario. ej: 2026-09-26 16:46:04

    // Crea un nuevo usuario 
    public function saveUser($rolId, $name, $surname, $email, $password){
        $this->save([
            'role_id' => $rolId, 
            'name' => $name, 
            'surname' => $surname, 
            'email' => $email, 
            'password' => $password, 
        ]);
    }

    // Valida que el usuario exista y coincida la contraseña ingresada con la que esta en la base de datos
    public function validateUser($email, $password){
        
        $user = $this->where('email', $email)->first();

        if($user && password_verify($password, $user['password'])){
            return $user;
        }

        return null;
    }

    // Acualizar contraseña
    /*public function saveUser($rolId, $name, $surname, $email, $password, $createAt){
        $this->save([
            'rol_id' => $rolId, 
            'name' => $name, 
            'surname' => $surname, 
            'email' => $email, 
            'password' => $password, 
            'create_at' => $createAt, 
        ]);
    }*/
}