<?php

namespace App\Controllers;

class NuraController extends BaseController
{
    public function index(): string
    {
        return view('fraccionamientos/nura');
    }
}