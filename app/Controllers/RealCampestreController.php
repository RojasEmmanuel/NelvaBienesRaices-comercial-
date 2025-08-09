<?php

namespace App\Controllers;

class RealCampestreController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/real_campestre');
    }
}