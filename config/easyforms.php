<?php

return [
    'display' => true,
    'prefix' => 'axios',
    'middleware' => 'web',
    'form' => [
        'namespace' => 'App\Http\Forms',
        'path' => app_path('Http/Forms'), // must not have trailing forward slash
        'google_recaptcha' => [
            'mode' => 'global', // global or explicit
            'site_key' => env('GOOGLE_RECAPTCHA_SITE_KEY', null),
            'secret_key' => env('GOOGLE_RECAPTCHA_SECRET_KEY', null),
            'minimum_score' => 0.5,
        ],
    ],
    'defaults' => [
        'help' => [
            'position' => 'append_inner_icon',
            'icon' => 'mdi-help',
        ],
    ],
];
