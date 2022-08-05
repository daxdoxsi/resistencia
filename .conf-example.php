<?php

/* Example config file */

return [

    # Database configuration
    'database' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'port'      => '3306',
        'user'      => 'root',
        'pass'      => 'CostaRica88**',
        'name'      => 'resistencia',
    ],

    # Language definition
    'language' => [
        'list_codes'    => 'es,en',
        'list_labels'   => 'Español,English',
        'default_code'  => 'es',
        'default_label' => 'Español',
    ],

    # Memcached
    'memcached' => [
        'host' => '127.0.0.1',
        'port' => '11511',
    ],

    # Routes definition
    'routes' => [
        ''  => [
            'controller'    => 'main',
            'title'         => 'Inicio|||Home',
            'description'   => 'Página principal the Resistencia PHP Framework|||Main Page of Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'about' => [
            'controller'    => 'about',
            'title'         => 'Acerca de|||About us',
            'description'   => 'Acerca de Resistencia PHP Framework|||About Resistencia PHP Framework',
            'keyword'       => 'acerca de,about us,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'services' => [
            'controller'    => 'service',
            'title'         => 'Servicios|||Service',
            'description'   => 'Servicios de Resistencia PHP Framework|||Service of Resistencia PHP Framework',
            'keyword'       => 'servicios,services,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'contact' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'members' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'user' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'user/login' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'user/subscribe' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'user/opt-out' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'user/logout' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'business' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'business/login' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'business/subscribe' => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'business/opt-out'  => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],
        'business/logout'       => [
            'controller'    => 'contact',
            'title'         => 'Contacto|||Contact Us',
            'description'   => 'Página de Contacto de Resistencia PHP Framework|||Contact page from Resistencia PHP Framework',
            'keyword'       => 'inicio,home,resistencia,php framework,php,developers,development',
            'og:image'      => 'https://www.mysite.com/files/og_image.jpeg'
        ],

    ],

];