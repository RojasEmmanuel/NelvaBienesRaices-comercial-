<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class RealCampestreController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/real-campestre');
    }
}