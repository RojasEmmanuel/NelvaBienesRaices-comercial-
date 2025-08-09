<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;
class OceanicaController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/oceanica');
    }
}