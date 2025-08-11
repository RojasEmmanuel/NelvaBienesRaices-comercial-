<?php

namespace App\Controllers;

class inversionesController extends BaseController
{
    public function mazunte()
    {

        return view('inversionesLugares/mazunte',  ['title' => 'Nelva Bienes Raíces']);
    }
    public function tonameca()
    {

        return view('inversionesLugares/tonameca',  ['title' => 'Nelva Bienes Raíces']);
    }

    public function salinaCruz()
    {

        return view('inversionesLugares/salinaCruz',  ['title' => 'Nelva Bienes Raíces']);
    }
}