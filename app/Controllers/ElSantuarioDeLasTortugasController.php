<?php

namespace App\Controllers;

class ElSantuarioDeLasTortugasController extends BaseController
{
    public function index(): string
    {
        return view('ElSantuarioDeLasTortugas');
    }
}