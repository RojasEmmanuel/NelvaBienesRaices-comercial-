<?php

namespace App\Controllers;

class PrincipalController extends BaseController
{
    public function index(): string
    {
        return view('index', ['title' => 'Nelva Bienes Raíces']);
    }

    public function nosotros(): string
    {
        return view('nosotros', ['title' => 'Nelva Bienes Raíces']);
    }
    
    public function servicios(): string
    {
        return view('servicios', ['title' => 'Nelva Bienes Raíces']);
    }

    public function contacto(): string
    {
        return view('contacto', ['title' => 'Nelva Bienes Raíces']);
    }
    public function mas(): string
    {
        return view('mas', ['title' => 'Nelva Bienes Raíces']);
    }
    public function atractivos(): string
    {
        return view('atractivos', ['title' => 'Nelva Bienes Raíces']);
    }
    public function asesores(): string
    {
        return view('asesores', ['title' => 'Nelva Bienes Raíces']);
    }

    
}
