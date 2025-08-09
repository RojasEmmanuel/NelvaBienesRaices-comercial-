<?php

namespace App\Controllers\fraccionamientos;

use App\Controllers\BaseController;

class NuraController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/nura');
    }
}