<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class ZullController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/zull');
    }
}