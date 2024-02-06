<?php

return [
    'display' => true,
    'prefix' => 'axios',
    'middleware' => 'web',
    'form' => [
        'namespace' => 'App\Http\Forms',
        'path' => app_path('Http/Forms'), // must not have trailing forward slash
        'google_recaptcha' => [
            'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY', null),
            'secret_key' => env('GOOGLE_RECAPTCHA_SECRET_KEY', null),
        ],
    ],
    'defaults' => [
        'help' => [
            'position' => 'append_inner_icon',
            'icon' => 'mdi-help',
        ],
    ],
];
