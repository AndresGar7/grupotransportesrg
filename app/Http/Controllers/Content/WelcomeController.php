<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
     public function index()
    {
        $menuItems = [
            [
                'name' => 'Servicios',
                'submenu' => ['Ejemplo 1', 'Ejemplo 2', 'Ejemplo 3'],
            ],
            [
                'name' => 'Nosotros',
                'submenu' => ['Quiénes somos', 'Nuestro equipo'],
            ],
            [
                'name' => 'Contacto',
                'submenu' => ['Email', 'Teléfono'],
            ],
        ];
      
        return Inertia::render('Welcome', [
            'menuItems' => $menuItems,
        ]);
    }
}
