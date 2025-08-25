<?php

return [
    [
        'name' => 'Inicio',
        'submenu' => [],
        'url' => '/'
    ],
    [
        'name' => 'Servicios',
        'submenu' => [
            ['name' => 'Ejemplo 1', 'url' => '/servicios/ejemplo-1'],
            ['name' => 'Ejemplo 2', 'url' => '/servicios/ejemplo-2'],
            ['name' => 'Ejemplo 3', 'url' => '/servicios/ejemplo-3'],
        ],
        'url' => '/servicios'
    ],
    [
        'name' => 'Nosotros',
        'submenu' => [
            ['name' => 'Quiénes somos', 'url' => '/nosotros/quienes-somos'],
            ['name' => 'Nuestro equipo', 'url' => '/nosotros/equipo'],
        ],
        'url' => '/nosotros'
    ],
    [
        'name' => 'Contacto',
        'submenu' => [
            ['name' => 'Email', 'url' => '/contacto/email'],
            ['name' => 'Teléfono', 'url' => '/contacto/telefono'],
        ],
        'url' => '/contacto'
    ],
];
