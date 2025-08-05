<?php

namespace App\Controllers;

class ServiciosController extends BaseController
{
    public function index()
    {
        
        return view('servicios',  ['title' => 'Nelva Bienes Raíces']);
    }
}