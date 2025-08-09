<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class SicaruController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/sicaru');
    }
}