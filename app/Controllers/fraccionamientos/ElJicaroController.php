<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class ElJicaroController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/el-Jicaro');
    }
}