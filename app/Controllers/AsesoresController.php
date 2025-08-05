<?php

namespace App\Controllers;

class AsesoresController extends BaseController
{
    public function index(): string
    {
        return view('asesores', ['title' => 'Asesores - Nelva Bienes Raíces']);
    }
}
