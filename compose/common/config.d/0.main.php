<?php 
use MapasCulturais\i;

return [
    'app.siteName' => env('SITE_NAME', 'Mapa Cultural - GRAVATAÍ'),
    'app.siteDescription' => i::__("O Mapas Culturais é uma plataforma colaborativa que reúne informações sobre agentes, espaços, eventos, projetos culturais e oportunidades"),

    'themes.active' => env('ACTIVE_THEME', 'MapasCulturais\Themes\BaseV1'),

    'app.lcode' => env('APP_LCODE', 'pt_BR,es_ES'),

    'namespaces' => array(
        'MapasCulturais\Themes' => THEMES_PATH,
        'MapasCulturais\Themes\BaseV1' => THEMES_PATH . 'BaseV1/',
        'Subsite' => THEMES_PATH . 'Subsite/',
    ),

    'doctrine.database' => [
        'host'           => env('DB_HOST', 'db'),
        'dbname'         => env('DB_NAME', 'mapas'),
        'user'           => env('DB_USER', 'mapas_gravatai'),
        'password'       => env('DB_PASS', 'smcelm@p@5'),
        'server_version' => env('DB_VERSION', 10),
    ]
];