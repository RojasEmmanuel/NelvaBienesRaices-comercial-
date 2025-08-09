<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class AndromedaController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/andromeda');
    }
}