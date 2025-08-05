<?php

namespace App\Controllers;

class AtractivosController extends BaseController
{
    public function index(): string
    {
        return view('atractivos', ['title' => 'Atractivos - Nelva Bienes Raíces']);
    }
}
