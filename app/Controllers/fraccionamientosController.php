<?php

namespace App\Controllers;

class fraccionamientosController extends BaseController
{
    public function andromeda(): string
    {
        return view('fraccionamientos/andromeda', ['title' => 'Nelva Bienes Raíces']);
    }

    public function elJicaro(): string
    {
        return view('fraccionamientos/el-jicaro', ['title' => 'Nelva Bienes Raíces']);
    }

    public function SantuarioTortugas(): string
    {
        return view('fraccionamientos/el-santuario-de-las-tortugas', ['title' => 'Nelva Bienes Raíces']);
    }

    public function nura(): string
    {
        return view('fraccionamientos/nura', ['title' => 'Nelva Bienes Raíces']);
    }

    public function nyssa(): string
    {
        return view('fraccionamientos/nyssa', ['title' => 'Nelva Bienes Raíces']);
    }
    public function oceanica(): string
    {
        return view('fraccionamientos/oceanica', ['title' => 'Nelva Bienes Raíces']);
    }
    public function realCampestre(): string
    {
        return view('fraccionamientos/real-campestre', ['title' => 'Nelva Bienes Raíces']);
    }
    public function sicaru(): string
    {
        return view('fraccionamientos/sicaru', ['title' => 'Nelva Bienes Raíces']);
    }
    public function zull(): string
    {
        return view('fraccionamientos/zull', ['title' => 'Nelva Bienes Raíces']);
    }
}
