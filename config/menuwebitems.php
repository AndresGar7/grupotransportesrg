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
            ['name' => 'Mudanzas', 'url' => '/servicios/mudanzas'],
            ['name' => 'Acarreos', 'url' => '/servicios/acarreos'],
            ['name' => 'Carga Ligera', 'url' => '/servicios/carga-ligera'],
            ['name' => 'Carga Pesada', 'url' => '/servicios/carga-pesada'],
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
