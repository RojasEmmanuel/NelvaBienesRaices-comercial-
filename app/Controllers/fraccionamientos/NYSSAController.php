<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class NYSSAController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/nyssa');
    }
}