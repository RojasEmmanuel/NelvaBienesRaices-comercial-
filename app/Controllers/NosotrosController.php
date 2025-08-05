<?php

namespace App\Controllers;

class NosotrosController extends BaseController
{
    public function index()
    {
        
        return view('nosotros',  ['title' => 'Nosotros - Nelva Bienes Raíces']);
    }
}