<?php

namespace App\Controllers;

class RealCampestreController extends BaseController
{
    public function index(): string
    {
        return view('RealCampestre');
    }
}