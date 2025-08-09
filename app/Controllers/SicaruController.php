<?php

namespace App\Controllers;

class SicaruController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/sicaru');
    }
}