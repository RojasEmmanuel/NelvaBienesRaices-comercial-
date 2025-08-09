<?php

namespace App\Controllers;

class ElSantuarioDeLasTortugasController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/el-santuario-de-las-tortugas');
    }
}