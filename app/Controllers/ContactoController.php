<?php

namespace App\Controllers;

class ContactoController extends BaseController
{
    public function index()
    {

        return view('contacto',  ['title' => 'Contacto - Nelva Bienes Raíces']);
    }
}