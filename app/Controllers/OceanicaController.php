<?php

namespace App\Controllers;

class OceanicaController extends BaseController
{
    public function index(): string
    {
        return view('Oceanica');
    }
}