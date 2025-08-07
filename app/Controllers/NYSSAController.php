<?php

namespace App\Controllers;

class NYSSAController extends BaseController
{
    public function index(): string
    {
        return view('NYSSA');
    }
}