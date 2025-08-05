<?php

namespace App\Controllers;

class MasController extends BaseController
{
    public function index(): string
    {
        return view('mas', ['title' => 'Más - Nelva Bienes Raíces']);
    }
}
