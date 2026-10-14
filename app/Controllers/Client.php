<?php

namespace App\Controllers;

class Client extends BaseController
{
    public function index()
    {
        return view('Client/inicio');
    }
}