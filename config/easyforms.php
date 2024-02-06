<?php

return [
    'display' => true,
    'prefix' => 'axios',
    'middleware' => 'web',
    'form' => [
        'namespace' => 'PlusTimeIT\EasyForms\Forms',
        'path' => app_path('Http/Forms'), // must not have trailing forward slash
    ],
    'defaults' => [
        'help' => [
            'position' => 'append_inner_icon',
            'icon' => ['icon' => 'mdi-help'],
        ],
    ],
];
